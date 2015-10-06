<?php
  $class = 'is-page';

  include '_header.php';
  include '_menus.php';
?>

<main role="main" class="content">
  <h1 class="content--header">Nyheder</h1>
  <div class="itk-boxlist-news">
    <?php include 'includes/_news.php'; ?>
  </div>
  <?php include 'includes/_pager.php'; ?>
</main>
<?php
  include '_footer.php';
?>
