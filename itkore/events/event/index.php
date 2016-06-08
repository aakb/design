<?php
  include $_SERVER['DOCUMENT_ROOT']. '/itkore/_settings.php';

  $class = 'is-page';
  $is_active = 1;

  include $path . '/_header.php';
  include $path . '/_menus.php';
?>

<main role="main" class="content">
  <?php include $path . '/includes/_image.php'; ?>
  <div class="content--inner">
    <h1 class="content--header">Event</h1>
    <div class="content--meta">4. oktober 2015</div>
    <div class="content--lead">
      <p>Introduktion til eventen</p>
    </div>
    <div class="content--text">
      <p>Teksten til eventen</p>
    </div>
  </div>
</main>
<?php
  include $path. '/_footer.php';
?>
