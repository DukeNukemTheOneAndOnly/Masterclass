<?php 
/*
* Auteur: Bastien Réveillon
* Description: Routeur
* Date: 20/10/2022
* Version: 1
*/


// Constantes pour les chemins de fichiers 
define("BOOTSTRAP", "/model/lib/bootstrap_ini.php");
define("G_PATH", "p");

// Controllers
define("C_HOME", "/controller/home_controller.php");
define("C_ABOUT", "/controller/about_controller.php");
define("C_MAP", "/controller/map_controller.php");
define("C_TEST", "/controller/test_controller.php");

// Constantes pour les valeurs possible des paramètres GET
define("PATH_HOME", "home");
define("PATH_ABOUT", "about");
define("PATH_MAP", "map");
define("PATH_TEST", "test");

// Views
define("V_HEADER", "/view/header.php");
define("V_NAV", "/view/nav.php");
define("V_ABOUT", "/view/about.php");
define("V_FOOTER", "/view/footer.php");
define("V_HOME", "/view/home.php");
define("V_MAP", "/view/map.php");
define("V_OBJET", "/view/objet.php");