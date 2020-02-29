<div class="titulo">Interface</div>

<?php
interface Animal {
    function respirar();
}

// interface Canino {
//     function latir(): string;
// }

interface Mamifero {
    function mamar();
}

interface Canino extends Animal, Mamifero{ // Herda N interfaces
    function latir(): string;
    function correr();
}


interface Felino {
    function correr();
}

class Cachorro implements Canino { // Só deve herdar uma classe
    function respirar(){
        return 'Respirando!';
    }
    function latir(): string{
        return 'Latindo!'; //Obrigatório (Deve retrnar uma String)
    }
    function mamar(){
        return 'Mamando!';
    }
    function correr(){
        return 'Correndo!'; //Obrigatório
    }
}

$animal = new Cachorro();
echo 'Cachorro:<br>';
echo $animal->respirar(), '<br>';
echo $animal->latir(), '<br>';
echo $animal->mamar(), '<br>';
echo $animal->correr(), '<br>';

echo '<br>';
var_dump($animal);

echo '<br>';
var_dump($animal instanceof Cachorro);
var_dump($animal instanceof Canino);
var_dump($animal instanceof Mamifero);
var_dump($animal instanceof Animal);
var_dump($animal instanceof felino);
