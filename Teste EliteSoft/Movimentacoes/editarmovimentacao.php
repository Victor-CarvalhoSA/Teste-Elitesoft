<?php
    include 'funcoes/conexao.php';
    $id = $_GET['id'];
    $con = getConexao();
    $sql = "select * from movimentacoes where id=$id";
    $rs = mysqli_query($con, $sql);

    while($row = mysqli_fetch_array($rs)){
        $id = $row['id'];
        $valor = $row['valor'];
        break; 
    }
?>
<html><head><title>Editar Movimentação</title></head>
<body>
<div>
    <h2>Editar Movimentação existente</h2>
    <table border="1px">
    <tr><th>ID</th><th>valor</th></tr>
       <tr>
        <form action="atualizamovimentacao.php" method="post">
        <td><input type="text" name="id" value="<?=$id;?>" readonly/></td>
        <td><input type="text" name="valor" value="<?=$valor;?>"/></td>
        <td><input class="btn" type="submit" name="bt" value="Atualizar"/></td>
        </form>
        </table>
        </tr>
    </div>
</body>
</html>
