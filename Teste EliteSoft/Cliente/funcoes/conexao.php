<?php
function getConexao(){
    $dbi=mysqli_connect("localhost","root","","elitesoft") or die ("conexao falhou!");
    mysqli_set_charset($dbi,"utf8");

    return $dbi;
}