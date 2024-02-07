<?php
  require_once('classes/Accueil.php');
  $info_accueil  = new Accueil('Accueil');
?>


<!DOCTYPE html>
<html>

  <?php require_once('templates/corps/css.php') ?>


  <body>
      <div class="se-pre-con"></div>

      <?php require_once('templates/corps/entete.php') ?>
      <?php require_once('templates/corps/pieds.php') ?>


      <?php require_once('templates/corps/js.php') ?>
  </body>


</html>