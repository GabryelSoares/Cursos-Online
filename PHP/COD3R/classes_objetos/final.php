<div class="titulo">Modificador Final</div>

<?php

abstract class Abstrata {
    public abstract function metodo1();

    public final function metodo2(){ // Método 'final' não pode ser sobrescrito
        echo 'Não vou mudar! <br>';
    }
}

class Classe extends Abstrata {
    public function metodo1() {
        echo 'Executando método 1 <br>';
    }

    // public function metodo2(){
    //     echo 'Executando método 2 <br>';      ERRADO
    // }
}

$classe = new Classe();
$classe->metodo1();
$classe->metodo2();

final class Unica {
    public $attr = 'Valor Único!!!';
}

$unica = new Unica();
echo $unica->attr;

// class Duplicata extends Unica {
//     public $att2;
// }