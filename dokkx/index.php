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
      <a href="/dokkx/besoeg-dokkx/aabningstider.php" class="header--button-link">Se vores åbningstider</a>
    </div>
  </div>
</div>
<!--region.html.twig END-->

<main role="main">
  <div class="itk-boxlist">
    <article class="itk-boxlist--item">
      <header>
        <h2 class="itk-boxlist--header"><a href="#">Something</a></h2>
        <p>Til dig der gerne vil dele din erfaring og inspireres af andre kollegaer og eksperter tilbyder Center for
          Innovation i Aarhus deltagelse i vores innovationsnetværk. Her møder du kollegaer i Aarhus Kommune, der
          arbejder med innovation ligesom dig.</p>
        <a href="netvaerk.php">Læs om netværk</a>
      </header>
      <figure><a href="#"><img src="https://unsplash.it/500/500/?random"></a></figure>
    </article>
    <article class="itk-boxlist--item">
      <header>
        <h2 id="network" class="itk-boxlist--header"><a href="#">Prototyper</a></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Hi omnes lingua, institutis, legibus inter se differunt. Cum ceteris in veneratione tui montes, nascetur mus.</p>
      </header>
      <figure><a href="#"><img src="https://unsplash.it/500/600/?random"></a></figure>
    </article>
    <article class="itk-boxlist--item">
      <header>
        <h2 class="itk-boxlist--header"><a href="#">Noget andet</a></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Hi omnes lingua, institutis, legibus inter se differunt. Cum ceteris in veneratione tui montes, nascetur mus.</p>
      </header>
      <figure><a href="#"></a><img src="https://unsplash.it/500/700/?random"></a></figure>
    </article>
  </div>
  <h2 class="frontpage--header">Aktiviteter</h2>
  <div class="itk-boxlist-events">
    <?php include 'includes/_events.php'; ?>
    <a href="events.php" class="button is-block">Alle aktiviteter</a>
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
