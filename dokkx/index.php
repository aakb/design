<?php
  $class = 'is-frontpage';

  include '_header.php';
  include '_menus.php';
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
      <a href="/dokkx/besoeg-dokkx/aabningstider.php" class="header--button-link">Se vores åbningstider</a>
    </div>
  </div>
</div>

<main role="main" class="content">
  <div class="itk-boxlist">
    <article class="itk-boxlist--item">
      <header>
        <h2 class="itk-boxlist--header"><a href="#">[Mangler tekst]</a></h2>
        <p>[Mangler tekst]</p>
        <a href="#">[Mangler tekst]</a>
      </header>
      <figure><a href="#"><img src="https://unsplash.it/500/425/?random"></a></figure>
    </article>
    <article class="itk-boxlist--item">
      <header>
        <h2 class="itk-boxlist--header"><a href="#">[Mangler tekst]</a></h2>
        <p>[Mangler tekst]</p>
        <a href="#">[Mangler tekst]</a>
      </header>
      <figure><a href="#"><img src="https://unsplash.it/500/450/?random"></a></figure>
    </article>
  </div>
  <?php include 'includes/_instagram.php'; ?>
</main>
<!--region.html.twig END-->

<?php include $path . '/_footer.php'; ?>
