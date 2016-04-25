<?php
  include $_SERVER['DOCUMENT_ROOT']. '/devteam/_settings.php';

  $class = 'is-frontpage';

  include $path . '/_header.php';
  include $path . '/_menus.php';
?>

<!--region.html.twig START-->
<div class="header" role="banner" id="home">
  <div class="header--inner">
    <h1 class="header--big">ITK Dev Team laver digitale løsninger</h1>
    <p class="header--lead">
      Vi har lavet mange digitale løsninger for forskellige dele af Aarhus Kommune, her kan du se demoer og læse om dem
    </p>
    <p class="header--sub">
    </p>
    <div class="header--button-wrapper">
      <a href="/devteam/projekter/" class="header--button-link">Se vores projekter</a>
    </div>
  </div>
</div>

<main role="main" class="content">
  <div class="content--inner">
    <div class="itk-boxlist">
    <h2 class="frontpage--header">Seneste projekter</h2>
      <?php include $path . '/includes/boxes/_itkore.php'; ?>
      <?php include $path . '/includes/boxes/_aroskanalen.php'; ?>
    </div>
    <h2 class="frontpage--header"><a href="https://www.instagram.com/explore/tags/dokkx/">#itkhattedag</a> på Instagram</h2>
    <?php include 'includes/_instagram.php'; ?>
  </div>
</main>
<!--region.html.twig END-->
