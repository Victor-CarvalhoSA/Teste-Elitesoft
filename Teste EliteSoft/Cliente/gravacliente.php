<?php
    include'funcoes/conexao.php';

    $nome = $_POST['nome'];
    $uf = $_POST['uf'];
    $con = getConexao();

    $sql = "insert into clientes (nome,uf) values ('$nome','$uf')";
    echo $sql;
    mysqli_query($con,$sql);

    header ("Location: listacliente.php");
    ?>