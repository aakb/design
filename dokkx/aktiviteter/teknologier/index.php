<?php
  include $_SERVER['DOCUMENT_ROOT']. '/dokkx/_settings.php';

  $class = 'is-page';
  $is_sub_active[0] = 3;

  include $path . '/_header.php';
  include $path . '/_menus.php';
?>

<main role="main" class="content">
  <?php include $path . '/includes/_image.php'; ?>
  <div class="content--inner">
    <h1 class="content--header">Teknologier</h1>
    <div class="content--lead">
      <p>[Mangler tekst]</p>
    </div>
    <div class="content--text">
      <p>[Mangler tekst]</p>
    </div>
    <div class="itk-boxlist">
      <?php include $path . '/includes/boxes/_fitlight-trainer.php'; ?>
      <?php include $path . '/includes/boxes/_robotstoevsuger.php'; ?>
      <?php include $path . '/includes/boxes/_doerautomatik.php'; ?>
    </div>
  </div>
</main>
<?php include $path . '/_footer.php'; ?>
