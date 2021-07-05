<!DOCTYPE html>
<html lang="en">
<?php
   include_once('header.php');
?>

<body>
  <div class="container">
  <div class="accontainer art-postcontent mt-3 mb-3">
  <?php
    include_once('nav.php');
  ?>

   <div class="row container">
      <!-- left pane -->
      <div class="col-md-9 col-sm-12">
         <?php
            include_once('contents/acupuncture.html');
         ?>
         <!--- bottom menu-->
         <?php
           include_once('bottom_nav1.php');
         ?>
       </div>
       <!--- right pane -->
       <div class="col-md-3 col-sm-12">
         <?php
           include_once('right_pane.php');
         ?>
       </div>
   </div>

    <?php
       include_once('footer.php');
    ?>
    </div>
  </div>
</body>
</html>

