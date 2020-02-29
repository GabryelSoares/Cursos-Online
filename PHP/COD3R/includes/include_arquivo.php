<?php
echo "Carregando: include_arquivo<br>";

$variavel = 'Variável definida';

if(!function_exists('soma')){
    function soma($a,$b){
        return $a + $b;
    }
}