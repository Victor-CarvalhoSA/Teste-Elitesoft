<?php
    include 'funcoes/conexao.php';
    $con = getConexao();
    $sql = "Select itens.id as itensid, itens.idproduto, itens.valor, produtos.id, produtos.nome, produtos.descricao from produtos, itens where itens.id=produtos.id";

    $rs = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html><head><title>Lista de Itens</title></head>
<body>
    <div>
    <table border="1px">
        <tr>
        <th>ID</th><th>ID Produto</th><th>Valor</th>
        </tr>
    <?php
        while ($row = mysqli_fetch_array($rs)){
            $id = $row['itensid'];
            $produto = $row['descricao'];
            $valor = $row['valor'];
    ?>
            <tr>
                <td><?=$id;?></td>
                <td><?=$produto;?></td>
                <td><?=$valor;?></td>
                <td><a href="excluiritem.php?id=<?=$id;?>">Excluir</a></td>
                <td><a href="editaritem.php?id=<?=$id;?>">Editar</a></td>
            </tr>
    </div>

<?php        }
    echo "</table></body></html>";
?>