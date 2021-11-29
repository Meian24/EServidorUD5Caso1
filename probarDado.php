<?php 

/*Llamamos a la clase Dado*/
require_once "ClaseDado.php";

/*instanciamos nuevo dado*/
$dado = new Dado(0, 12);

for ($i= $dado->getminNumDado(); $i < $dado->getmaxNumDado(); $i++) { 
	echo "Tirada ". $i." ->". " ". $dado->tirarDado() . "<br>";
}

?>