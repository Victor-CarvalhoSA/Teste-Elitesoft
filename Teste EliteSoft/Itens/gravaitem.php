<?php
    include'funcoes/conexao.php';

    $idproduto = $_POST['idproduto'];
    $valor = $_POST['valor'];
    $con = getConexao();

    $sql = "insert into itens (idProduto,valor) values ('$idproduto','$valor')";
    echo $sql;
    mysqli_query($con,$sql);

    header ("Location: listaitem.php");
    ?>