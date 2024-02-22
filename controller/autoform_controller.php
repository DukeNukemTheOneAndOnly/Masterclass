<?php
function messagerore($messageror){echo '<script>document.getElementById("me").innerhtml= "'+$messageror+'";</script>';}
require(ROOT . V_AUTOFORM);
if(isset($_POST["price"])){
    $user = new cars($_POST["model"],$_POST["marque"],$_POST["link"],$_POST["price"]);
    echo $message;
}
