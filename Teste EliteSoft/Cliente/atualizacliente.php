<?php
    include 'funcoes/conexao.php';
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $uf = $_POST['uf'];

    $con = getConexao();
    $sql = "update clientes set nome='$nome', uf='$uf' where id='$id'";
    mysqli_query($con, $sql);

header ("location: listacliente.php")
?>
