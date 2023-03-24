<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="./view/img/test.ico">
    <link href="view/css/scrollbar.css" rel="stylesheet">
    <title>home</title>
  </head>
<?php 
  define("ROOT", ".");// constante de la racine

  // inclusion des fichiers nécessaires
  require_once(ROOT . "/model/lib/const.php");
  require_once(ROOT . BOOTSTRAP);
  require(ROOT . PLUIE);
?>

<body class="m-4 bg-dark" style="height:100%;" onload="createRain()" id="rain">
<?php
// création de la session
  if(session_status() == PHP_SESSION_NONE)
  session_start();
  
  $path = isset($_GET[G_PATH]) ? $_GET[G_PATH] : null; // récupération du chemin indique

if(!$path) // si aucun chemin n'est indiqué
    header("location: ./?".G_PATH."=".PATH_HOME); //redirection à l'accueil

switch($path){
    case PATH_HOME:
        require_once(ROOT . C_HOME);
        break;
    case PATH_ABOUT:
        require_once(ROOT . C_ABOUT);
        break;
    case PATH_MAP:
        require_once(ROOT . C_MAP);
        break;
    case PATH_TEST:
        require_once(ROOT . C_TEST);
        break;
      }

  ?>
</body>
</html>