<?php
  include $_SERVER['DOCUMENT_ROOT']. '/devteam/_settings.php';

  $class = 'is-page';
  $is_active       = 2;

  include $path . '/_header.php';
  include $path . '/_menus.php';
?>

<main role="main" class="content">
  <?php include '../includes/_image.php'; ?>
  <div class="content--inner">
    <h1 class="content--header">Om ITK Devteam</h1>
    <div class="content--lead">
      <p></p>
    </div>
    <div class="content--text">
      <p>
        De spiser kode til morgenmad... Tænker binært...

      </p>
    </div>
    <div class="itk-boxlist">
      <?php include $path . '/includes/boxes/_frihed-til-mere-til-flere.php'; ?>
      <?php include $path . '/includes/boxes/_rum-for-gentaenkning.php'; ?>
      <?php include $path . '/includes/boxes/_centrum-for-velfaerds-og-frihedsteknologi.php'; ?>
    </div>
  </div>
</main>
