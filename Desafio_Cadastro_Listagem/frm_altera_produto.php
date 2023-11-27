<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alteração de Produtos</title>
	

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            text-align: center;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px; 
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #8a2be2;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #6a1c9a; 
        }



        a {
            text-decoration: none;
            color: #007bff;
            margin-right: 10px;
            padding: 8px;
            border-radius: 4px;
            background-color: #e0e0e0;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #b0b0b0;
        } 



    </style>





</head>
<body>
 
   <?php
     
    /*1- realizando a conexao com o banco de dados(local,usuario,
     senha,nomeBanco)*/
     //$con=mysqli_connect("localhost","root","","bd_projeto");
	 include "conexao.php";
    
    
   /*2- pegando o valor vindo da url */
    $id_produto=$_GET["id"];
  

   /*3- criando o comando sql para selecionar o registro a ser alterado*/
   $comandoSql="select * from tb_produtos where id_produto='$id_produto'";


    /*4- executando o comando sql */
    $resultado=mysqli_query($con,$comandoSql);
   
   /*5- pegando os dados da consulta criada e armazenando em variaveis */   
   $dados=mysqli_fetch_assoc($resultado);

    $nome=$dados["nome_produto"];
    $descricao=$dados["descricao_produto"];
    $valor=$dados["valor_produto"];

   ?>
   <!--preenchendo o formulario com dados da consulta -->

   
	
	<form action="altera_produto.php" method="POST">

      <a href=index.php> Início </a>
	  <br>
      <br>
      <label for="id"> Id: </label>
      <input type="text" id="id" name="id" readonly value="<?php echo $id_produto ?>">
     
	  <label for="nome"> Nome: </label>
      <input type="text" id="nome" name="nome" pattern=".*[a-zA-Z].*" value="<?php echo $nome ?>" >
   
      <label for="descricao"> Descrição: </label>
      <input type="text" id="descricao" name="descricao" pattern=".*[a-zA-Z].*" value="<?php echo $descricao ?>" >
        
	  <label for="valor"> Valor: </label>
      <input type="text" id="valor" name="valor" pattern="[0-9]+([,\.][0-9]{1,2})?" title="Insira um valor válido" value="<?php echo $valor ?>">
	  	 
    
      <input type="submit" value="Alterar">

   </form>

  
  </div>
</body>
</html>
