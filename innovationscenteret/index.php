<?php
  $class = 'is-frontpage';

  include '_header.php';
  include '_menus.php';
?>

<div class="header" role="banner" id="home">
  <div class="header--inner">
    <h1 class="header--big">Vi er et fælles mødested for innovation i Aarhus Kommune</h1>
    <p class="header--lead">
      Vi understøtter udviklingsarbejdet med værkstedsfaciliteter, og indgår som projektpartner med stærke faglige
      kompetencer indenfor design, antropologi og procesfacilitering.
    </p>
    <p class="header--sub">﻿Lær os at kende og læs mere om, hvordan du kan <a href="#">bruge os</a> i dit arbejde her.</p>
    <div class="header--button-wrapper">
      <a href="ydelser.php" class="header--button-link is-primary">Ydelser</a>
    </div>
  </div>
</div>
<main role="main">
  <div class="itk-boxlist">
    <?php
      include 'includes/_network.php';
    ?>
    <?php
      include 'includes/_prototypes.php';
    ?>
    <?php
      include 'includes/_collaboration.php';
    ?>
  </div>
  <div class="itk-boxlist">
    <?php
      include 'includes/_facilities.php';
    ?>
    <?php
      include 'includes/_sparring.php';
    ?>
    <?php
      include 'includes/_courses.php';
    ?>
  </div>
</main>
<?php
  include '_footer.php';
?>
