<?php 
/*
* Auteur: Bastien Réveillon
* Description: Routeur
* Date: 20/10/2022
* Version: 1
*/


//--Constantes pour les chemins de fichiers 
define("BOOTSTRAP", "/model/lib/bootstrap_ini.php");
define("G_PATH", "p");

//--Controllers
define("C_HOME", "/controller/home_controller.php");
define("C_ABOUT", "/controller/about_controller.php");
define("C_MAP", "/controller/map_controller.php");
define("C_TEST", "/controller/test_controller.php");
define("C_AUTO", "/controller/auto_controller.php");
define("C_AUTOFORM", "/controller/autoform_controller.php");
define("C_LOGSIG", "/controller/log-sign_controller.php");

//--Constantes pour le pdo
define("PDO_HOSTNAME", "localhost");
define("PDO_DB_NAME", "masterclass");
define("PDO_DB_USERNAME", "masterclassGUY");
define("PDO_DB_PASSWORD", "Super");
define("PDO_CAR", "/model/car.php");
define("PDO_LOGSIG", "/model/user.php");
define("PDO", "/model/pdo.php");

//--Constantes pour les valeurs possible des paramètres GET
define("PATH_ADMIN", "admin");
define("PATH_HOME", "home");
define("PATH_ABOUT", "about");
define("PATH_MAP", "map");
define("PATH_TEST", "test");
define("PATH_AUTO", "auto");
define("PATH_AUTOFORM", "autoform");
define("PATH_LOGSIG", "logsig");


//--View
//Page
define("V_ABOUT", "/view/about.php");
define("V_AUTOFORM", "/view/friday/autoform.php");
define("V_LOGSIG", "/view/connection.php");
define("V_HOME", "/view/home.php");
define("V_MAP", "/view/map.php");
define("V_OBJET", "/view/objet.php");

//Composant
define("V_HEADER", "/view/Composant/header.php");
define("V_NAV", "/view/Composant/nav.php");
define("V_FOOTER", "/view/Composant/footer.php");


//--Option
define("PLUIE", "/view/Composant/rain.php");