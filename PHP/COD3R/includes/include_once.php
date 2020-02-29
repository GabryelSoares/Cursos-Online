<div class="titulo">Include Once</div>

<?php
include('include_once_arquivo.php');
// require('include_once_arquivo.php');

echo "Variável = '{$variavel}'. <br>";
$variavel = 'Variável alterada!';
echo "Variável = '{$variavel}'. <br>";

echo"Variável = '{$variavel}'.<br>";
$variavel = 'Variável alterada!';
echo "Variável = '{$variavel}'. <br>";

include_once('include_once_arquivo.php');
echo "Variável = '{$variavel}'. <br>";

require_once('include_once_arquivo.php');
echo "Variável = '{$variavel}'. <br>";

