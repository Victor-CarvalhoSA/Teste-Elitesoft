<?php
    include'funcoes/conexao.php';

    $id = $_POST['id'];
    $idItem = $_POST['idItem'];
    $idMovimentacao = $_POST['idMovimentacao'];
    $data = $_POST['data'];
    $quantidade = $_POST['quantidade'];

    $sql = "insert into movimentositens (idProduto,idMovimentacao,data,quantidade) values ('$idItem','$idMovimentacao','$data','$quantidade')";
    echo $sql;
    mysqli_query($con,$sql);

    header ("Location: listamovimentacaoitem.php");
    ?>