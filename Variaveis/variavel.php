<?php 

echo "comand exit can use to test ur app until the determinate line";
echo "var_pump para checar tamanho de variavel </br>";

$nome = "Gustavo";
var_dump($nome);

$numeroInteiro = 1;
$numeroReal = 0.1;
//exit();

echo "Not is possible create a var init with special character like %,*,- and & the only can use is _ </br>" ;
echo "Not is possible create a var that already exist in php core with special reserve like this  </br>" ;
echo "Variavel Numero Inteiro $numeroInteiro </br>" ; 
echo "Variavel Numero Decimal $numeroReal </br>" ;
echo "</br></br></br>";

echo "To clean a var use unset: example unset(numeroInteiro)</br>";
echo "var numeroInteiro now contains\n\n", $numeroInteiro;

echo "comand IF and Isset can use to test if a Var have any contains: Exemplo if(isset(var)){if true}else{if false}";
echo "</br></br></br>";

unset($numeroInteiro);
if (isset($numeroInteiro)) {
	echo "var numeroInteiro exist";
}else{
	echo "var dont exist";
};

$sobrenome = " Cenci";

echo "to concatenate in PHP use dot between the vars: Example var1 dot var2</br>";
echo "two vars concatenate \n\n\n"; 
echo $nome." ".$sobrenome;
echo "</br></br></br>";

echo "the vars that read files can create using functions like fopen, fread, fclose which receive a file arch: Example</br>";

echo "$ specialVarWithFile = f open(file way)";
echo "</br></br></br>";

echo "object var can create using (= new) before var name: Example</br>";
echo "$ newObject = new()";

 ?>