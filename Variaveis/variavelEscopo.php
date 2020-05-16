<?php

echo "in PHP to a function see a global var, u need use global inside that function, Example : function teste { global $ nome}</br></br>";
echo "super globals var like get and server dont need use tag global before var inside functions</br>";

$nome = "Gustavo Montanini Cenci";

function testeNome(){

global $nome;
echo $nome;

}

testeNome();

?>