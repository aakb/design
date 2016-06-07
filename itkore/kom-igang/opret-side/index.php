<?php
  include $_SERVER['DOCUMENT_ROOT']. '/itkore/_settings.php';

  $class = 'is-page';
  $is_active = 1;
  $is_sub_active[1] = 1;

  include $path . '/_header.php';
  include $path . '/_menus.php';
?>

<main role="main" class="content">
  <?php include $path . '/includes/_image.php'; ?>
  <div class="content--inner">
    <h1 class="content--header">Opret side</h1>
    <div class="content--lead">
      <p>[Mangler tekst]</p>
    </div>
    <div class="content--text">
      <p>[Mangler tekst]</p>
    </div>
    <div class="itk-boxlist">
      <?php include $path . '/includes/boxes/_kom_igang.php'; ?>
    </div>
  </div>
</main>
