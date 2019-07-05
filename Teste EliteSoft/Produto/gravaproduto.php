<?php
    include'funcoes/conexao.php';

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $con = getConexao();

    $sql = "insert into produtos (nome,descricao) values ('$nome','$descricao')";
    echo $sql;
    mysqli_query($con,$sql);

    header ("Location: listaproduto.php");
    ?>