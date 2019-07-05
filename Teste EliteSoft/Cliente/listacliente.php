<?php
    include 'funcoes/conexao.php';
    $con = getConexao();
    $sql = "select * from clientes order by id";

    $rs = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html><head><title>Lista de Clientes</title></head>
<body>
    <div>
    <table border="1px">
        <tr>
        <th>ID</th><th>Nome</th><th>UF</th>
        </tr>
    <?php
        while ($row = mysqli_fetch_array($rs)){
            $id = $row['id'];
            $nome = $row['nome'];
            $uf = $row['uf'];
    ?>
            <tr>
                <td><?=$id;?></td>
                <td><?=$nome;?></td>
                <td><?=$uf;?></td>
                <td><a href="excluircliente.php?id=<?=$id;?>">Excluir</a></td>
                <td><a href="editarcliente.php?id=<?=$id;?>">Editar</a></td>
            </tr>
    </div>

<?php        }
    echo "</table></body></html>";
?>