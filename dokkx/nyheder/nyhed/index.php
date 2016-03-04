<?php
  include $_SERVER['DOCUMENT_ROOT']. '/dokkx/_settings.php';

  $class = 'is-page';
  $is_active = 1;

  include $path . '/_header.php';
  include $path . '/_menus.php';
?>

<main role="main" class="content">
  <?php include $path . '/includes/_image.php'; ?>
  <div class="content--inner">
    <h1 class="content--header">[Mangler tekst]</h1>
    <div class="content--text">
      <p>[Mangler tekst]</p>
    </div>
    <div class="itk-boxlist">
      <?php include $path . '/includes/boxes/_sundhed-traening.php'; ?>
      <?php include $path . '/includes/boxes/_book-rundvisning.php'; ?>
    </div>
  </div>
</main>
<?php
  include $path. '/_footer.php';
?>
