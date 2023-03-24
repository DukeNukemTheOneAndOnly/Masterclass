<main class="m-3 bg-light center-text" style="height:100%; overflow:auto;">
    <h2 id="titi">Actualitée de la vie</h2>
    <div class="d-flex justify-content-around flex-wrap">
      <?php
      require("data.php");
      $state = 1;
      if(array_key_exists('button', $_POST)) {
        $state=$_POST['button'];
      }
      
      $first = (($state-1)*6);
      $last = $first+6;
        while ($first < $last) {
          if(isset($news[$first])){
            if(($first%2)==0){
              echo '<div class="card mb-2 m-3 bg-dark text-white" style="width: 575px;">';
              echo '<div class="row g-0">';
              echo '<div class="col-md-4">';
              echo '<img src="view/img/article/'.$news[$first]['img'].'" si class="img-fluid rounded-start">';
              echo '</div>';
              echo '<div class="col-md-8">';
              echo ' <div class="card-body">';
              echo '   <h5 class="card-title fs-5">'.$news[$first]['title'].'</h5>';
              echo '   <p class="card-text fw-light">'.$news[$first]['texte'].'</p>';
              echo '   <p class="card-text"><small>'.$news[$first]['date'].'</small></p>';
              echo ' </div></div></div></div>';
            }else{
              echo '<div class="card mb-2 m-3 bg-dark text-white" style="width: 575px;">';
              echo '<div class="row g-0">';
              echo '<div class="col-md-8">';
              echo ' <div class="card-body">';
              echo '   <h5 class="card-title fs-5">'.$news[$first]['title'].'</h5>';
              echo '   <p class="card-text fw-light">'.$news[$first]['texte'].'</p>';
              echo '   <p class="card-text"><small>'.$news[$first]['date'].'</small></p>';
              echo'</div></div>';
              echo '<div class="col-md-4">';
              echo '<img src="view/img/article/'.$news[$first]['img'].'" si class="img-fluid rounded-end">';
              echo '</div></div></div>';
            }
          }
        $first++;
      }
      echo '<div class="bg-light text-white mb-3 mt-4 text-center" style="width: 100%;"><form method="post">';
      $page=round(($newsNumber/6));
      $count=1;
      while ($count <= $page) {
        echo '<input type="submit" name="button" class="btn btn-primary m-2" value="'.$count.'" />';
        $count++;
      }
      echo '</form></div>';
      ?>
    </div>
</main>