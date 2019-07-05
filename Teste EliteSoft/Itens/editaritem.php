<?php
    include 'funcoes/conexao.php';
    $id = $_GET['id'];
    $con = getConexao();
    $sql = "select * from itens where id=$id";
    $rs = mysqli_query($con, $sql);
    
    $sql2 = "select * from produtos";
    $rs2 = mysqli_query($con, $sql2);

    while($row = mysqli_fetch_array($rs)){
        $produto = $row['idProduto'];
        $valor = $row['valor'];
        break; 
    }
?>
<html><head><title>Editar Item</title></head>
<body>
<div>
    <h2>Editar Item existente</h2>
    <table border="1px">
    <tr><th>ID</th><th>Produto</th><th>Valor</th></tr>
       <tr>
        <form action="atualizacliente.php" method="post">
        <td><input type="text" name="id" value="<?=$id;?>" readonly/></td>
        <td><select name="idproduto">
            <?php
                while ($row = mysqli_fetch_array($rs2)) {
                $idproduto = $row['id'];
                $descricao = $row['descricao'];
                    if ($produto != $idproduto){
                        echo "<option value='$idproduto'>$descricao</option>";
                    } else {
                        echo "<option value='$idproduto' selected='selected'>$descricao</option>";
                    }
                } 
            ?>
        </select></td>
        <td><input type="text" name="valor" value="<?=$valor;?>"/></td>
        <td><input class="btn" type="submit" name="bt" value="Atualizar"/></td>
        </form>
        </table>
        </tr>
    </div>
</body>
</html>
