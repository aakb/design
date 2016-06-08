<?php
  include $_SERVER['DOCUMENT_ROOT']. '/itkore/_settings.php';

  $class = 'is-frontpage';

  include $path . '/_header.php';
  include $path . '/_menus.php';
?>

<div class="header" role="banner" id="home" style="background-image: url('<?php echo $path_to_site; ?>/images/header-default.jpg');">
  <div class="header--inner">
    <h1 class="header--big">Velkommen til dit nye site</h1>
    <p class="header--lead">
      Kom igang med at lægge indhold ind ved at følge vores vejledning
    </p>
    <p class="header--sub">
      Fortsæt ved at klikke på linket nedenunder
    </p>
    <div class="header--button-wrapper">
      <a href="<?php echo $path_to_site; ?>/kom-igang/" class="header--button-link">Kom igang</a>
    </div>
  </div>
</div>

<main role="main" class="content">
  <div class="content--inner is-front">
    <div class="itk-boxlist--wrapper">
      <h2 class="frontpage--header">Vejledninger</h2>
      <div class="itk-boxlist-gallery">
        <?php include $path . '/includes/gallery-boxes/_opret_side.php'; ?>
      </div>
    </div>
  </div>
  <div class="content--inner is-front">
    <div class="itk-boxlist--wrapper">
      <h2 class="frontpage--header">Seneste nyt</h2>
      <div class="itk-boxlist">
        <?php include $path . '/includes/_news.php'; ?>
      </div>
      <a href="<?php echo $path_to_site; ?>/nyheder/" class="button is-block is-inverted">Alle nyheder</a>
    </div>
  </div>
  <div class="content--inner is-front">
    <div class="itk-boxlist--wrapper">
      <h2 class="frontpage--header">Events</h2>
      <div class="itk-boxlist">
        <?php include $path . '/includes/_event.php'; ?>
      </div>
      <a href="<?php echo $path_to_site; ?>/events/" class="button is-block is-inverted">Alle begivenheder</a>
    </div>
  </div>
</main>
