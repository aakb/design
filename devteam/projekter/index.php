<?php
  include $_SERVER['DOCUMENT_ROOT']. '/devteam/_settings.php';

  $class = 'is-page';
  $is_active = 0;

  include $path . '/_header.php';
  include $path . '/_menus.php';
?>

<main role="main" class="content">
  <?php include $path . '/includes/_image.php'; ?>
  <div class="content--inner">
    <h1 class="content--header">Projekter</h1>
    <div class="content--lead">
      <p>[Mangler tekst]</p>
    </div>
    <div class="content--text">
      <p>Når ITK Devteam ikke leger med Google Glass, selv-følende drivhuse, hacker kommunnens servere eller andet. Koder de på en masse forskellige produkter. Her er et udsnit:</p>
    </div>
    <div class="itk-boxlist">
      <?php include $path . '/includes/boxes/_itkore.php'; ?>
      <?php include $path . '/includes/boxes/_ulf.php'; ?>
      <?php include $path . '/includes/boxes/_dokk1.php'; ?>
      <?php include $path . '/includes/boxes/_aroskanalen.php'; ?>
      <?php include $path . '/includes/boxes/_loop.php'; ?>
      <?php include $path . '/includes/boxes/_dbbcms-aakb.php'; ?>
    </div>
  </div>
</main>
