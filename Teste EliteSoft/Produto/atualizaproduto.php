<?php
    include 'funcoes/conexao.php';
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];

    $con = getConexao();
    $sql = "update produtos set nome='$nome', descricao='$descricao' where id='$id'";
    mysqli_query($con, $sql);

header ("location: listaproduto.php")
?>
