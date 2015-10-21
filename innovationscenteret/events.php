<?php
  $class = 'is-page';
  $is_active = 3;

  include '_header.php';
  include '_menus.php';
?>

<main role="main" class="content">
  <h1 class="content--header">Events</h1>
  <div class="itk-boxlist-news">
    <?php include 'includes/_events.php'; ?>
    <?php include 'includes/_pager.php'; ?>
  </div>
</main>
<?php
  include '_footer.php';
?>
