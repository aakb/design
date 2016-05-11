<?php
  include $_SERVER['DOCUMENT_ROOT']. '/dokkx/_settings.php';

  $class = 'is-frontpage';

  include $path . '/_header.php';
  include $path . '/_menus.php';
?>

<!--region.html.twig START-->
<div class="header" role="banner" id="home">
  <div class="header--inner">
    <h1 class="header--big">Aarhus Kommunes føle-røre-legested for velfærds- og frihedsteknologi</h1>
    <p class="header--lead">
      DokkX er Aarhus Kommunes inspirationsrum for moderne teknologi. Her kan du tanke ny viden og inspiration til,
      hvordan teknologi gør din hverdag lidt lettere, sundere og sjovere – gennem hele livet.
    </p>
    <p class="header--sub">
      Så kom og besøg os på niveau 2 på Dokk1.
    </p>
    <div class="header--button-wrapper">
      <a href="/dokkx/besoeg-dokkx/aabningstider/" class="header--button-link">Se vores åbningstider</a>
    </div>
  </div>
</div>

<main role="main" class="content">
  <div class="content--inner">
    <h2 class="frontpage--header">Seneste nyt fra DokkX</h2>
    <div class="itk-boxlist">
      <?php include $path . '/includes/_news.php'; ?>
    </div>
    <h2 class="frontpage--header">Oplevelser på DokkX</h2>
    <div class="itk-boxlist-gallery">
      <?php include $path . '/includes/boxes/_sundhed-traening.php'; ?>
      <?php include $path . '/includes/boxes/_book-rundvisning.php'; ?>
    </div>
    <h2 class="frontpage--header"><a href="https://www.instagram.com/explore/tags/dokkx/">#DokkX</a> på Instagram</h2>
    <?php include 'includes/_instagram.php'; ?>
  </div>
</main>
<!--region.html.twig END-->

<?php include $path . '/_footer.php'; ?>
