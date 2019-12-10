<?php
$a = "j'ai dit jm'en tapote jpart a grand tapin!";
$b = " ba tu t'embete pas dit"; //tu donne une valeur a la variable
function verify($a,$b) // je créer une fonction avec un nom et un paramétres
{
  echo $a.''.$b;
  return $a.''.$b;//la fonction doit afficher la variable
}
verify($a,$b); // appelle la fonction
 ?>
