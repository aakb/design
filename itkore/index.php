<?php
  include $_SERVER['DOCUMENT_ROOT']. '/itkore/_settings.php';

  $class = 'is-frontpage';

  include $path . '/_header.php';
  include $path . '/_menus.php';
?>

<!--region.html.twig START-->
<div class="header" role="banner" id="home" style="background-image: url('<?php echo $path_to_site; ?>/images/header-default.jpg');">
  <div class="header--inner">
    <h1 class="header--big">[Mangler tekst]</h1>
    <p class="header--lead">
      [Mangler tekst]
    </p>
    <p class="header--sub">
    </p>
    <div class="header--button-wrapper">
      <a href="#" class="header--button-link">Læs mere</a>
    </div>
  </div>
</div>

<main role="main" class="content">
  <div class="content--inner is-front">
    <div class="itk-boxlist--wrapper">
      <h2 class="frontpage--header">Temaer</h2>
      <div class="itk-boxlist-gallery">
        <?php include $path . '/includes/gallery-boxes/_1.php'; ?>
        <?php include $path . '/includes/gallery-boxes/_2.php'; ?>
        <?php include $path . '/includes/gallery-boxes/_3.php'; ?>
        <?php include $path . '/includes/gallery-boxes/_4.php'; ?>
        <?php include $path . '/includes/gallery-boxes/_5.php'; ?>
        <?php include $path . '/includes/gallery-boxes/_6.php'; ?>
      </div>
    </div>
  </div>
  <div class="content--inner is-front">
    <div class="itk-boxlist--wrapper">
      <h2 class="frontpage--header">Seneste nyt</h2>
      <div class="itk-boxlist">
        <?php include $path . '/includes/_news.php'; ?>
      </div>
    </div>
  </div>
</main>
<!--region.html.twig END-->
