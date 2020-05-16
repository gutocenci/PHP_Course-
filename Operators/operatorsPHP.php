<?php 

echo "add operator = </br>";
$nome = "Gustavo";

echo "concatenate operator . , if u need use the same value inside var plus a new value use .= </br>";
$sobreNome = "Cenci";
$nomeCompleto = $nome." ".$sobreNome;

echo "with number u can use assignment operators like -, --, +, ++, *, **(^), / and %(mod). To can use more complex like -=, +=, *= and /=</br>";
$saldo = 0;
$saldo += 100;
$desconto = 0.5;
$saldo *= $desconto;

echo "comparate operators >, >=. <, <=, ==, !=, <br>";

var_dump($saldo > $desconto);
var_dump($saldo < $desconto);
var_dump($saldo == $desconto);
var_dump($saldo != $desconto);

echo "<br>";

echo "atention to compare value and type var u need use 3x =, like ===<br>";
var_dump($saldo === $desconto);

echo "<br>";

echo "when u need compare if the value are equal and bigger and smaller than another var, exist a new operator in PHP called space ship <+>: this operator returns (0) when bigger, (1) when equal<br> ans (2) when smaller<br>"

echo "when u need compare NULL, u can use ?? between vars, this operator returns the first var with have  NOT NULL value<br> Example: ech o varA ?? varB ?? varC"

 ?>