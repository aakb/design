<?php
  include $_SERVER['DOCUMENT_ROOT']. '/itkore/_settings.php';

  $class = 'is-page';
  $is_active = 1;

  include $path . '/_header.php';
  include $path . '/_menus.php';
?>

<main role="main" class="content">
  <?php include $path . '/includes/_image.php'; ?>
  <div class="content--inner">
    <h1 class="content--header">Kom igang</h1>
    <div class="content--lead">
      <p>Her finder du en vejledning til oprettelse af indhold og tips og tricks til systemet</p>
    </div>
    <div class="content--text">
      <p>Se emnerne i listen nedenunder.</p>
    </div>
    <div class="itk-boxlist">
      <?php include $path . '/includes/boxes/_opret_side.php'; ?>
    </div>
  </div>
</main>
