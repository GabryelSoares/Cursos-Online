<div class="titulo">Desafio do Módulo</div>

<?php
require_once('usuario.php');

$usuario = new Usuario('Gabryel', 24, 'gabryelfhsoares');
echo $usuario->apresentar();
unset($usuario);