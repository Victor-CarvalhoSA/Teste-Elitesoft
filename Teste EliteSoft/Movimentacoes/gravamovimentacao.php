<?php
    include'funcoes/conexao.php';

    $valor = $_POST['valor'];
    $con = getConexao();

    $sql = "insert into movimentacoes (valor) values ('$valor')";
    echo $sql;
    mysqli_query($con,$sql);

    header ("Location: listamovimentacao.php");
    ?>