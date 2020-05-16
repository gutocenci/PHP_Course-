<?php 

echo "gloval vars can be used in anywhere PHP code, for example post, get</br>";
echo "post and get are arrays</br>";
echo "atention: to acess u need write anything after ? in URL adress</br>"

$nome = (int)$_GET["a"];

var_dump($nome);

echo "another example, u can get user IP ambient using this code below</br>";

$ipUser = (int)$_SERVER("REMOTE_ADDR");

var_dump($ipUser);

 ?>