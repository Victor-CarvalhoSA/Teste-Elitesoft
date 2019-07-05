<?php
    include 'funcoes/conexao.php';
    $id = $_GET['id'];
    $con = getConexao();
    $sql = "delete from movimentositens where id=$id";

    mysqli_query($con,$sql);
    header("Location: listamovimentacaoitem.php")
?>