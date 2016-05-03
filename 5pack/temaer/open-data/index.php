<?php
  include $_SERVER['DOCUMENT_ROOT']. '/5pack/_settings.php';

  $class = 'is-page';
  $is_active = 2;

  include $path . '/_header.php';
  include $path . '/_menus.php';
?>

<main role="main" class="content">
  <?php include $path . '/includes/_image.php'; ?>
  <div class="content--inner">
    <h1 class="content--header">Open data</h1>
    <div class="content--lead">
      <p>[Mangler tekst]</p>
    </div>
    <div class="content--text">
      <p>[Mangler tekst]</p>
    </div>
    <div class="itk-boxlist">
      <?php include $path . '/includes/boxes/_digital_infrastruktur.php'; ?>
      <?php include $path . '/includes/boxes/_open_data.php'; ?>
    </div>
  </div>
</main>
