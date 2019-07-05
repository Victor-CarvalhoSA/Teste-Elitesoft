<?php
    include 'funcoes/conexao.php';
    $id = $_GET['id'];
    $con = getConexao();
    $sql = "select * from produtos where id=$id";
    $rs = mysqli_query($con, $sql);

    while($row = mysqli_fetch_array($rs)){
        $id = $row['id'];
        $nome = $row['nome'];
        $descricao = $row['descricao'];
        break; 
    }
?>
<html><head><title>Editar Produto</title></head>
<body>
<div>
    <h2>Editar produto existente</h2>
    <table border="1px">
    <tr><th>ID</th><th>NOME</th><th>descricao</th></tr>
       <tr>
        <form action="atualizaproduto.php" method="post">
        <td><input type="text" name="id" value="<?=$id;?>" readonly/></td>
        <td><input type="text" name="nome" value="<?=$nome;?>"/></td>
        <td><input type="text" name="descricao" value="<?=$descricao;?>"/></td>
        <td><input class="btn" type="submit" name="bt" value="Atualizar"/></td>
        </form>
        </table>
        </tr>
    </div>
</body>
</html>
