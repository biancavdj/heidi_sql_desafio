<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Produtos</title>

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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
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


<script>
        function confirmarExclusao(idProduto) {
            var confirmacao = confirm("Tem certeza que deseja excluir este produto?");
            if (confirmacao) {
                
                window.location.href = 'exclui_produto.php?id=' + idProduto;
            }
        }
    </script>

</head>
<body>
    <div>

    <?php
    echo "<a href=index.php> Início </a>";
    echo "<h3> Listagem de Produto </h3>";

 
    include "conexao.php";

  
    $comandoSql = "SELECT * FROM tb_produtos ORDER BY valor_produto ASC";

   
    $resultado = mysqli_query($con, $comandoSql);

  
    if ($resultado) {
      
        echo "<table border='1'>
              <tr>
              <th>Nome do Produto</th>
              <th>Valor do Produto</th>
              <th>Ações</th>
              </tr>";

              while ($row = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . $row['nome_produto'] . "</td>";
                echo "<td>" . $row['valor_produto'] . "</td>";
                echo "<td>";
                
                echo "<a href='#' onclick='confirmarExclusao(" . $row['id_produto'] . ")'> Excluir </a>";
                echo "<a href='frm_altera_produto.php?id=" . $row['id_produto'] . "'> Alterar </a>";
                echo "</td>";
                echo "</tr>";
        }

        echo "</table>";
       
        echo " <br> <br> <a href=frm_cadastra_produto.php> Cadastrar novo produto </a>";

        mysqli_free_result($resultado);
    } else {
        echo "Erro ao executar a consulta: " . mysqli_error($con);
    }

    
    mysqli_close($con);
    ?>

    </div>
</body>
</html>
