<?php
include  "getip.php";
$getparam = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$nome =  $getparam['nome'];
$senha = $getparam['senha'];
$tel = $getparam['tel'];
$endereco = $getparam['endereco'];
echo "<h2 align='center'>meu nome e $nome e meu telefone e $tel<h2>";
echo "<h2 align='center'>Eu moro em $endereco e minha senha e ". md5($senha)."<h2>";
echo("meu ip é = ".$ip);
