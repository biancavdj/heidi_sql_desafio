<?php
function selecionaProdutoCod($codigo){

   
    include "conexao.php";

    
    $comandoSql = "SELECT * FROM tb_produtos ORDER BY valor_produto ASC";
    
 
    $resultado=mysqli_query($con, $comandoSql);

    echo "<select name='produto'> ";

   
    while($dados=mysqli_fetch_assoc($resultado)){

        $id=$dados["id_produto"];
        $produto=$dados["nome_produto"];

        if($id==$codigo)
            echo "<option value=$id selected=selected> $produto</option>";
            else
            echo "<option value=$id> $produto <option>";
    }
    echo "</select>";


}



?>