<?php
    include 'funcoes/conexao.php';
    $con = getConexao();
    $sql = "select * from produtos order by id";

    $rs = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html><head><title>Lista de Produtos</title></head>
<body>
    <div>
    <table border="1px">
        <tr>
        <th>ID</th><th>Nome</th><th>Descricão</th>
        </tr>
    <?php
        while ($row = mysqli_fetch_array($rs)){
            $id = $row['id'];
            $nome = $row['nome'];
            $descricao = $row['descricao'];
    ?>
            <tr>
                <td><?=$id;?></td>
                <td><?=$nome;?></td>
                <td><?=$descricao;?></td>
                <td><a href="excluirproduto.php?id=<?=$id;?>">Excluir</a></td>
                <td><a href="editarproduto.php?id=<?=$id;?>">Editar</a></td>
            </tr>
    </div>

<?php        }
    echo "</table></body></html>";
?>