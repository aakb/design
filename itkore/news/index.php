<?php
  $class = 'is-page';
  $is_active       = 0;
  $is_group_active = 0;

  include '../_header.php';
  include '../_menus.php';
?>

<?php include $path . '/includes/_image.php'; ?>

<main role="main" class="content">
  <h1 class="content--header">Nyheder</h1>
  <div class="itk-boxlist-news">
    <?php include '../includes/_news.php'; ?>
    <?php include '../includes/_pager.php'; ?>
  </div>
</main>
<?php
  include '../_footer.php';
?>
