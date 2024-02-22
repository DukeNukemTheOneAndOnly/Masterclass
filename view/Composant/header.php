<header class="m-2 bg-light">
    <h1 class="p-3">Mon site a Bastien  <?php if(!(isset($_SESSION["user"]))){echo"<a  href='./?".G_PATH."=".PATH_LOGSIG."'><button type='button' class='btn btn-success'>Connection</button></a>";}else{echo" - ".$_SESSION["user"]["Pseudo"];} ?></h1>
    <?php include(ROOT . V_NAV);?>
</header>