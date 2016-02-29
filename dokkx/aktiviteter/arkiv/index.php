<?php
  include $_SERVER['DOCUMENT_ROOT']. '/dokkx/_settings.php';

  $class = 'is-page';
  $is_sub_active[0] = 4;

  include $path . '/_header.php';
  include $path . '/_menus.php';
?>

<?php include $path . '/includes/_image.php'; ?>
<main role="main" class="content">
  <div class="content--inner">
    <h1 class="content--header">Arkiv</h1>
    <div class="content--lead">
      <p>[Mangler tekst]</p>
    </div>
    <div class="content--text">
      <p>[Mangler tekst]</p>
    </div>
    <div class="itk-boxlist">
      <?php include $path . '/includes/boxes/_sundhed-traening.php'; ?>
    </div>
  </div>
</main>
<?php include $path . '/_footer.php'; ?>

