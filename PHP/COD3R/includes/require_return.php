<div class="titulo">Require & Return</div>

<?php
$valorRetorno = require('return_usado.php');
echo "$valorRetorno<br>";
echo "$variavelRetornada<br>";

echo __DIR__ . '<br>';

$valorRetorno2 = require(__DIR__ . '/return_nao_usado.php');
//var_dump($valorRetorno2); 
// Se for 'include' o arquivo existente retorna '1' e inexistente retorna 'false'
echo "$valorRetorno2<br>";
echo "$variavelDeclarada<br>";