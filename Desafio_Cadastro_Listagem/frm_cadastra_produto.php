<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cadastro de produto</title>
	
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

	
	<form action="cadastra_produto.php" method="POST">

      <a href=index.php> Início </a>
	  <br>
      <br>

      <label for="nome"> Nome do produto: </label>
      <input type="text" id="nome" name="nome"required pattern=".*[a-zA-Z].*">
      <br>
      <br>
      <label for="descricao"> Descrição do produto: </label>
      <input type="text" id="descricao" name="descricao"required pattern=".*[a-zA-Z].*">
      <br>
      <br>
      <label for="valor"> Valor do produto: </label>
      <input type="text" id="valor" name="valor" required pattern="[0-9]+([,\.][0-9]{1,2})?" title="Insira um valor válido">
      <br>
      <br>
      <label for="disp" >Disponível para venda:</label>
      <select id="disp" name="disp" required>
      <option value="Sim">Sim</option>
      <option value="Não">Não</option>
      </select>
      <br>
      <br>
      <input type="submit" value="Cadastrar">

   </form>

  
  
  
</body>
</html>