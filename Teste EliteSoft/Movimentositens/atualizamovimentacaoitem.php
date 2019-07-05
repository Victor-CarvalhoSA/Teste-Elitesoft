<?php
    include 'funcoes/conexao.php';
    $id = $_POST['id'];
    $idItem = $_POST['idItem'];
    $idMovimentacao = $_POST['idMovimentacao'];
    $data = $_POST['data'];
    $quantidade = $_POST['quantidade'];

    $con = getConexao();
    $sql = "update movimentositens set idItem='$idItem', idMovimentacao='$idMovimentacao', data='$data', quantidade="$quantidade" where id='$id'";
    mysqli_query($con, $sql);

header ("location: listamovimentacaoitem.php")
?>
