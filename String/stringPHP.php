<?php 

echo 'exist two methods to include Strings in vars, using simple quote or two quote. The diference between both are simple quote just see text and ignore sintaxe PHP.<br>';
echo 'with simple quote i can write $nome, $this, if{}, else{}.... into a echo without error output, but i cant get and show a var for example<br>';

$nome = 'gustavo';
$sobreNome = 'cenci';

$cenci = "Montanini";

$completName = $nome.$sobreNome.$cenci;

echo "$completName";


var_dump($nome);
var_dump($sobreNome);


echo "<br>"
echo strtoupper($nome);
echo "<br>" 	
echo strtolower($sobreNome);

?>