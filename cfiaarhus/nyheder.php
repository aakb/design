<?php
  $class = 'is-page';
  $is_active = 2;

  include '_header.php';
  include '_menus.php';
?>

<main role="main" class="content">
  <h1 class="content--header">Nyheder</h1>
  <div class="itk-boxlist-news">
    <?php include 'includes/_news.php'; ?>
    <?php include 'includes/_pager.php'; ?>
  </div>
</main>
<?php
  include '_footer.php';
?>
