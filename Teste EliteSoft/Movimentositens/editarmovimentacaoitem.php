<?php
    include 'funcoes/conexao.php';
    $id = $_GET['id'];
    $con = getConexao();
    $sql = "select * from movimentositens where id=$id";
    $rs = mysqli_query($con, $sql);
    
    $sql2 = "select * from itens";
    $sql3 = "select* from movimentacoes";
    $rs2 = mysqli_query($con, $sql2);
    $rs3 = mysqli_query($con, $sql3);
    while($row = mysqli_fetch_array($rs)){
        $iditem = $row['idItem'];
        $idmov = $row['idMovimentacao'];
        $data = $row['data'];
        $qtd = $row['quantidade'];
        break; 
    }
?>
<html><head><title>Editar Movimentação e item</title></head>
<body>
<div>
    <h2>Editar Movimentação e item existente</h2>
    <table border="1px">
    <tr><th>ID</th><th>ID Item</th><th>ID Movimentação</th><th>Data</th><th>Quantidade</th></tr>
       <tr>
        <form action="atualizamovimentacaoitem.php" method="post">
        <td><input type="text" name="id" value="<?=$id;?>" readonly/></td>
        <td><select name="idItem" required>
        <option selected disabled>Selecione um item</option>
            <?php
            while ($row = mysqli_fetch_array($rs2)) {
                $iditens = $row['id'];
                $idproduto = $row['idproduto'];
                $valoritem = $row['valor'];
                echo "<option value='$iditens'>$valoritem</option>";
            }
            ?>
            </select></td>
            <td><select name="idMovimentacao" required>
        <option selected disabled>Selecione uma movimentacao</option>
            <?php
            while ($row = mysqli_fetch_array($rs3)) {
                $idmov = $row['id'];
                $valormov = $row['valor'];
                echo "<option value='$idmov'>$valormov</option>";
            }
            ?>
            </select></td>
        <td><input type="date" name="data" value="<?=$data;?>"/></td>
        <td><input type="number" name="quantidade" value="<?=$qtd;?>"/></td>
        <td><input class="btn" type="submit" name="bt" value="Atualizar"/></td>
        </form>
        </table>
        </tr>
    </div>
</body>
</html>
