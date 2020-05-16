<?php 

echo "add operator = </br>";
$nome = "Gustavo";

echo "concatenate operator . , if u need use the same value inside var plus a new value use .= </br>";
$sobreNome = "Cenci";
$nomeCompleto = $nome." ".$sobreNome;

echo "with number u can use assignment operators like -, +, *, **(^), / and %(mod). To can use more complex like -=, +=, *= and /=</br>";
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

 ?>