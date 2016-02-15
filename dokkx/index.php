<?php
  $class = 'is-frontpage';

  include '_header.php';
  include '_menus.php';
?>
<!--region.html.twig START-->
<div class="header" role="banner" id="home">
  <div class="header--inner">
    <h1 class="header--big">Velfærdsteknologi i Aarhus Kommune</h1>
    <p class="header--lead">
      Vi indgår som projektpartner med kompetencer inden for design, antropologi og procesfacilitering.
    </p>
    <p class="header--sub">
      Kom og besøg i vores lokaler på niveau 2 på Dokk1.
    </p>
    <div class="header--button-wrapper">
      <a href="aabningstider.php" class="header--button-link">Se vores åbningstider</a>
    </div>
  </div>
</div>
<!--region.html.twig END-->

<main role="main">
  <div class="itk-boxlist-column">
    <!--region.html.twig START-->
    <?php
      include 'includes/_network.php';
    ?>
    <?php
      include 'includes/_prototypes.php';
    ?>
    <?php
      include 'includes/_collaboration.php';
    ?>
    <?php
      include 'includes/_facilities.php';
    ?>
    <?php
      include 'includes/_sparring.php';
    ?>
    <?php
      include 'includes/_courses.php';
    ?>
    <!--region.html.twig END-->
  </div>
  <h2 class="frontpage--header">Events</h2>
  <div class="itk-boxlist-events">
    <?php include 'includes/_events.php'; ?>
    <a href="events.php" class="button is-block">Alle events</a>
  </div>
  <h2 class="frontpage--header">Nyheder</h2>
  <div class="itk-boxlist-news">
    <?php include 'includes/_news.php'; ?>
    <a href="nyheder.php" class="button is-block">Alle nyheder</a>
  </div>
</main>
<?php
  include '_footer.php';
?>
