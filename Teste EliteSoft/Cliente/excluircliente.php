<?php
    include 'funcoes/conexao.php';
    $id = $_GET['id'];
    $con = getConexao();
    $sql = "delete from clientes where id=$id";

    mysqli_query($con,$sql);
    header("Location: listacliente.php")
?>