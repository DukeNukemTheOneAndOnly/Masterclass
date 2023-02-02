<?php
require("Class/Voiture.php");
echo"<main class='m-3 bg-dark text-light' style='height:100%; overflow:auto;'>";
//l'execution
$Prius = new voiture("Toyota","Prius",2000);
$Supra = new bolide("Toyota","Supra",1993,280);
var_dump($Prius);
var_dump($Supra);
echo"</main>";