<?php
    include 'funcoes/conexao.php';
    $con = getConexao();
    $sql = "select * from movimentacoes order by id";

    $rs = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html><head><title>Lista de Produtos</title></head>
<body>
    <div>
    <table border="1px">
        <tr>
        <th>ID</th><th>Valor</th>
        </tr>
    <?php
        while ($row = mysqli_fetch_array($rs)){
            $id = $row['id'];
            $valor = $row['valor'];
    ?>
            <tr>
                <td><?=$id;?></td>
                <td><?=$valor;?></td>
                <td><a href="excluirmovimentacao.php?id=<?=$id;?>">Excluir</a></td>
                <td><a href="editarmovimentacao.php?id=<?=$id;?>">Editar</a></td>
            </tr>
    </div>

<?php        }
    echo "</table></body></html>";
?>