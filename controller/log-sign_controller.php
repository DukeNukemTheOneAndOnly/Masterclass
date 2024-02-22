<?php
function messagerore($messageror){echo '<script>document.getElementById("me").innerhtml= "'+$messageror+'";</script>';}
$state;
if(isset($_POST["type"]))
{
    if($_POST["type"]=="sig")
    {
        echo "<h2 style='color:white;margin:auto;'>Création de compte Masterclass</h2>";
        echo '<script>document.getElementById("me").innerhtml= "'+$messageror+'";</script>';
        $state="sig";
    }
    else
    {
        echo "<h2 style='color:white;margin:auto;'>Connection</h2>";
        $state="log";
    }
}
else
{
    echo "<h2 style='color:white;margin:auto;'>Connection</h2>";
    $state="log";
}