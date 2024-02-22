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
  require_once(ROOT . PDO);
  require_once(ROOT . PDO_CAR);
  require_once(ROOT . PDO_LOGSIG);
  require_once(ROOT . BOOTSTRAP);
?>

<body class="m-4 bg-dark" style="height:100%;">
<?php
if(isset($_POST["Pseudo"],$_POST["mdp"],$_POST["state"])){
  $user = new user($_POST["Pseudo"],$_POST["mdp"],$_POST["state"]);
}
// création de la session
  if(session_status() == PHP_SESSION_NONE){
    session_start();
    $path = isset($_GET[G_PATH]) ? $_GET[G_PATH] : null;
    if($path==null){header("location: ./?".G_PATH."=".PATH_HOME);}}
  
switch($path){
    case PATH_HOME:
        require_once(ROOT . C_HOME);
        $sauce=-1;
        break;
    case PATH_ABOUT:
        require_once(ROOT . C_ABOUT);
        break;
    case PATH_MAP:
        require_once(ROOT . C_MAP);
        break;
    case PATH_AUTO:
        require_once(ROOT . C_AUTO);
        break;
    case PATH_AUTOFORM:
        require_once(ROOT . C_AUTOFORM);
        break;
    case PATH_LOGSIG:
        require_once(ROOT . C_LOGSIG);
        break;
    case PATH_TEST:
        require_once(ROOT . C_TEST);
        break;
    }

  ?>
</body>
</html>