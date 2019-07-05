<?php
    include 'funcoes/conexao.php';
    $id = $_POST['id'];
    $valor = $_POST['valor'];

    $con = getConexao();
    $sql = "update clientes set valor='$valor' where id='$id'";
    mysqli_query($con, $sql);

header ("location: listamovimentacao.php")
?>
