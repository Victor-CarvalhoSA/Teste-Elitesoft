<?php
    include 'funcoes/conexao.php';
    $id = $_GET['id'];
    $con = getConexao();
    $sql = "select * from clientes where id=$id";
    $rs = mysqli_query($con, $sql);

    while($row = mysqli_fetch_array($rs)){
        $id = $row['id'];
        $nome = $row['nome'];
        $uf = $row['uf'];
        break; 
    }
?>
<html><head><title>Editar Cliente</title></head>
<body>
<div>
    <h2>Editar cliente existente</h2>
    <table border="1px">
    <tr><th>ID</th><th>NOME</th><th>uf</th></tr>
       <tr>
        <form action="atualizacliente.php" method="post">
        <td><input type="text" name="id" value="<?=$id;?>" readonly/></td>
        <td><input type="text" name="nome" value="<?=$nome;?>"/></td>
        <td><input type="text" name="uf" value="<?=$uf;?>"/></td>
        <td><input class="btn" type="submit" name="bt" value="Atualizar"/></td>
        </form>
        </table>
        </tr>
    </div>
</body>
</html>
