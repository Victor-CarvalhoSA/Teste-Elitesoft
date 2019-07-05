<?php
include 'funcoes/conexao.php';
$con = getConexao();
//$sql = "Select itens.id as itensid, itens.idproduto, itens.valor as valoritem, movimentacoes.id, movimentacoes.valor from movimentacoes, itens";
$sql = "select * from itens";
$sql2 = "select* from movimentacoes";

$rs = mysqli_query($con, $sql);
$rs2 = mysqli_query($con, $sql2);
?>
<!DOCTYPE html>
<html><head><title>Adicionar Movimentação e item</title></head>
<body>
    <h2>Adicionar Movimentação e item</h2>
    <form action="gravamovimentacaoitem.php" method="post">
        <table>
        <tr><td>Item</td><td><select name="idItem" required>
        <option selected disabled>Selecione um item</option>
            <?php
            while ($row = mysqli_fetch_array($rs)) {
                $iditens = $row['id'];
                $idproduto = $row['idproduto'];
                $valoritem = $row['valor'];
                echo "<option value='$iditens'>$valoritem</option>";
            }
            ?>
            </select></td></tr>
            <tr><td>Movimentação</td><td><select name="idMovimentacao" required>
        <option selected disabled>Selecione uma movimentacao</option>
            <?php
            while ($row = mysqli_fetch_array($rs2)) {
                $idmov = $row['id'];
                $valormov = $row['valor'];
                echo "<option value='$idmov'>$valormov</option>";
            }
            ?>
            </select></td></tr>
            
            <tr><td>Data</td><td><input name="data" type="date" /> </td></tr>
            <tr><td>quantidade</td><td><input name="quantidade" type="number" /> </td></tr>
            <tr><td></td><td><input class="btn" name="bt" type="submit" value="gravar" /> </td></tr>
        </table>
    </form>
</body>
</html>