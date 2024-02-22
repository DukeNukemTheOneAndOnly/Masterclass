<?php
require_once(ROOT . V_HEADER);
$tab=display_car(find_all_car(),$_SESSION["Rank"]);
if(isset($_GET["supercar"])){delete_car($_GET["supercar"]);}
?>
<main class="m-4 center-text" style="height:100%; overflow:auto;">
<h2>Voiture actuellement a la vente</h2>
<table class="table bg-dark text-light">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Model</th>
      <th scope="col">Marque</th>
      <th scope="col">link</th>
      <th scope="col">Price</th>
      <?php if($_SESSION["Rank"]=="Admin"){echo"<th scope='col'>X</th>";}?>
    </tr>
  </thead>
  <?php echo $tab;?>
</table>
<div class="d-flex justify-content-around"><a href="./?<?= G_PATH ?>=<?= PATH_AUTOFORM ?>"><button type="button" class="btn btn-light">Add Car</button></a></div>
</main>
<?php
require_once(ROOT . V_FOOTER);
echo '<script>document.getElementById("auto").className +=" active";</script>';  