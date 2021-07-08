<!DOCTYPE html>
<html lang="en">
<?php
   //echo "path is $path ";
   //echo "<script>console.log('##2 home path: " . $path . "' );</script>";
   include_once('contents/header.html');
?>

<body>
  <div class="container">
  <div class="accontainer art-postcontent mt-3 mb-3">
  <?php
    include_once('contents/nav.html');
  ?>

   <div class="row container">
      <!-- left pane -->
      <div class="col-md-9 col-sm-12">
         <?php
            include_once("contents/$path.html");
         //<!--- bottom menu-->
           include_once('contents/bottom_nav1.html');
         ?>
       </div>
       <!--- right pane -->
       <div class="col-md-3 col-sm-12">
         <?php
           include_once('contents/right_pane.html');
         ?>
       </div>
   </div>

    <?php
       include_once('contents/footer.html');
    ?>
    </div>
  </div>
</body>
</html>
