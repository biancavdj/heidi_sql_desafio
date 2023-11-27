
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>

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

        .message-container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .success-message {
            color: #008000; 
        }

        .error-message {
            color: #FF0000; 
        }

        .link-button {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-align: center;
            font-size: 16px;
            line-height: 1.5;
        }

        .success-link-button {
            background-color: #bf8cff; 
        }

        .error-link-button {
            background-color: #bf8cff; 
        }

        .link-button:hover {
            background-color: #9964cc; 
        }
    </style>

</head>



     
<body>
    <div class="message-container">
      
        


<?php

include "conexao.php";


 $n=$_POST["nome"];
 $d=$_POST["descricao"];
 $v=$_POST["valor"];
 $disp = $_POST["disp"];


 $comandoSql="insert into tb_produtos
 (nome_produto, descricao_produto, valor_produto, disponibilidade) 
 values 
 ('$n','$d','$v', '$disp')";

 $resultado=mysqli_query($con,$comandoSql);





        if ($resultado == true) {
            header("Location: lista_produto.php");
            exit(); 
        } else {
            echo "<p class='error-message'>Erro no cadastro</p>";
            echo "<a href='lista_produto.php' class='link-button error-link-button'>Tentar Novamente</a>";
        }



        ?>
    </div>
</body>
</html>








































