<?php

$path = 'teste.txt';
$arq = fopen($path, 'w');
for($i=0; $i<10;$i++){
    fwrite($arq, 'teste'.chr(10));
    
}

fclose($arq);
//---------------------------------
$file = fopen('teste.txt','r');

$c = 0;

//$linha = fgets($file,1024);

while(!feof($file)){
	echo ftell($file).'<br>';
	$linha = fgets($file,1024);
	echo $linha.'<br>';
	$c +=1;
	
}

echo "<h1>O arquivo terminou na linha $c</h1>";

fclose($file);
