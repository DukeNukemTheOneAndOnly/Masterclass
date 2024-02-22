<?php
require("Class/Véhicule.php");
require("Class/tirelire.php");
echo"<main class='m-3 bg-dark text-light' style='height:100%; overflow:auto;'>";
echo "<h3>Cette page est utile pour le dévloppement de class (Je suis a l'exercice 6 :>)</h3>";
//l'execution
$Prius = new voiture("Toyota","Prius",2000);
$Supra = new bolide("Toyota","Supra",1993,5);
$PetitCochon = new tirelire(20);
var_dump($Prius);
var_dump($PetitCochon);
var_dump($Supra);
$Supra->Acceleration();
echo "vitesse après accèleration ".$Supra->getVitesse();
echo "<br>";
$Supra->Décéleration();
echo "vitesse après freinage ".$Supra->getVitesse();
echo"</main>";