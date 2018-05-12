<?php
/*
 next() -> avança retorna false ao final do array
 prev() -> retrocede para a posicao anterior
 current() retorna a posiçao atual no array
 end() vai para o final do array
 reset() retorna a primeira posiçao
 key()->retorna a chave da posição atual  
 */

$array = array(3,4,5,6,7);

do{
    echo current($array)."<br>";
    
}while(next($array));

echo 'fim do laço<br>';
/*
array_push() -> coloca o elemento no final da pilha
 array_pop() -> remove o ultimo elemento da pilha
*/

array_push($array, 'a');
print_r($array);
echo array_pop($array);

/*
 filas
array_shift() retorna o primeiro elemento da fila e o elimina do array
array_unshift() insere no inicio da fila
 */

array_unshift($array, 'wellington');
print_r($array);



