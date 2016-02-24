<?php
  $class = 'is-page';
  $is_active        = 1;
  $is_group_active  = 1;

  include '../_header.php';
  include '../_menus.php';
?>

<?php include '../includes/_image.php'; ?>
<main role="main" class="content">
  <h1 class="content--header">Events</h1>
  <div class="content--lead">
    <p>At nos hinc posthac, sitientis piros Afros. Ut enim ad minim veniam, quis nostrud exercitation. Ambitioni dedisse scripsisse iudicaretur. Prima luce, cum quibus mons aliud  consensu ab eo.</p>
  </div>
    <div class="itk-boxlist-events">
      <?php include '../includes/_events.php'; ?>
      <?php include '../includes/_pager.php'; ?>
    </div>
  </main>
  <?php
    include '../_footer.php';
  ?>
