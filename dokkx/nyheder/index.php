<?php
  include $_SERVER['DOCUMENT_ROOT']. '/dokkx/_settings.php';

  $class = 'is-page';
  $is_active = 1;

  include $path . '/_header.php';
  include $path . '/_menus.php';
?>

<main role="main" class="content">
  <div class="content--inner">
    <h1 class="content--header">Nyheder</h1>
    <div class="itk-boxlist-news">
      <?php include $path . '/includes/_pager.php'; ?>
    </div>
  </div>
</main>

<?php include $path . '/_footer.php'; ?>