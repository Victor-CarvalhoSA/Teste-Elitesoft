<?php
    include 'funcoes/conexao.php';
    $con = getConexao();
    //$sql = "Select itens.id as itensid, itens.idproduto, itens.valor, produtos.id, produtos.nome, produtos.descricao from produtos, itens where itens.id=produtos.id";
    $sql = "Select * from movimentositens";

    $rs = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html><head><title>Lista de Itens</title></head>
<body>
    <div>
    <table border="1px">
        <tr>
        <th>ID</th><th>ID Item</th><th>ID Movimentacao</th><th>Data</th><th>Quantidade</th>
        </tr>
    <?php
        while ($row = mysqli_fetch_array($rs)){
            $id = $row['id'];
            $iditem = $row['idItem'];
            $idmov = $row['idMovimentacao'];
            $data = $row['data'];
            $qtd = $row['quantidade'];
    ?>
            <tr>
                <td><?=$id;?></td>
                <td><?=$iditem;?></td>
                <td><?=$idmov;?></td>
                <td><?=$data;?></td>
                <td><?=$qtd;?></td>
                <td><a href="excluirmovimentacaoitem.php?id=<?=$id;?>">Excluir</a></td>
                <td><a href="editarmovimentacaoitem.php?id=<?=$id;?>">Editar</a></td>
            </tr>
    </div>

<?php        }
    echo "</table></body></html>";
?>