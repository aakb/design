<?php
  include $_SERVER['DOCUMENT_ROOT']. '/dokkx/_settings.php';

  $class = 'is-page';
  $is_active        = 1;
  $is_group_active  = 1;

  include $path . '/_header.php';
  include $path . '/_menus.php';
?>

<main role="main" class="content">
  <?php include '../includes/_image.php'; ?>
  <div class="content--inner">
    <h1 class="content--header">Besøg DokkX</h1>
    <div class="content--lead">
      <p>[Mangler tekst]</p>
    </div>
    <div class="content--text">
      <p>[Mangler tekst]</p>
    </div>
    <div class="itk-boxlist">
      <?php include $path . '/includes/boxes/_book-rundvisning.php'; ?>
    </div>
    <?php include 'includes/_instagram.php'; ?>
  </div>
</main>
<?php include $path . '/_footer.php'; ?>
