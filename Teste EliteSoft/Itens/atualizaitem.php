<?php
    include 'funcoes/conexao.php';
    $id = $_POST['id'];
    $idProduto = $_POST['idProduto'];
    $valor = $_POST['valor'];

    $con = getConexao();
    $sql = "update itens set idProduto='$idProduto', valor='$valor' where id='$id'";
    mysqli_query($con, $sql);

header ("location: listaitens.php")
?>
