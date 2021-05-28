<?php 
    require '../php/functions.php';

    $baju = cari($_GET['keyword']) ;
?>

    <div class="row py-5">
      <?php foreach($baju as $bj)  :?>
        <div class="col-lg-3">
          <div class="card" style="width: 18rem;">
            <img src="assets/img/<?= $bj['img'] ; ?>" class="card-img-top pt-5" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center" style="color: #8a1fe5;"><?= $bj['name'] ; ?></h5>
                <p class="card-text text-center"><small><?= $bj['info'] ; ?></small></p>
                <a href="php/detail.php?id=<?= $bj["id"]; ?>" class="btn btn-primary card text-center">Details</a>
              </div>
            </div>
          </div>  
          <?php endforeach ; ?>      
        </div>