<div class="titulo">Membros Estáticos</div>

<?php
class A{
    public $naoStatic = 'Variável de instância';
    public static $static = 'Variável de classe (estática)';

    public function mostrarA(){
        echo "Não estática = {$this->naoStatic}<br>";
        // Tentativa 1
        // echo "Estática = {$this->static}<br>";
        echo "Estática = " . self::$static . "<br>";
    }

    public static function mostrarStaticA(){  //($this) inacessível
        // echo "Não estática = {$this->naoStatic}<br>";
        // echo "Estática = {$this->static}<br>";
        echo "Estática = " . self::$static . "<br>";
    }

}

$objetoA = new A();
$objetoA->mostrarA(); 
$objetoA->mostrarStaticA(); // Não é a forma ideal


echo '<br>';
echo A::$static, '<br>'; // Ideal! Acessar diretamente pela classe
A::mostrarStaticA(); // Isso deixa o código mais claro

A::$static = 'Alterando membro de classe!!';
echo A::$static, '<br>';