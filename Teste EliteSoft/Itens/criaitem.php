<?php
include 'funcoes/conexao.php';
$con = getConexao();
$sql = "select * from produtos order by descricao";
$rs2 = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html><head><title>Adicionar item</title></head>
<body>
    <h2>Adicionar item</h2>
    <form action="gravaitem.php" method="post">
        <table>
        <tr><td>Produto</td><td><select name="idproduto" required>
        <option selected disabled>Selecione um produto</option>
            <?php
                while ($row = mysqli_fetch_array($rs2)) {
                $idproduto = $row['id'];
                $desc = $row['descricao'];
                echo "<option value='$idproduto'>$desc</option>";
                } 
            ?>
            </select></td></tr>
            <tr><td>Valor</td><td><input name="valor" type="number" /> </td></tr>
            <tr><td></td><td><input class="btn" name="bt" type="submit" value="gravar" /> </td></tr>
        </table>
    </form>
</body>
</html>