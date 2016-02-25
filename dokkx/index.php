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
        <h2 class="itk-boxlist--header"><a href="/dokkx/aktiviteter/sundhed-traening.php">Sundhed og træning</a></h2>
        <p>
          Der findes utallige teknologier, du kan bruge til at holde dig sund og i form gennem hele livet. Sammen med
          en bid brain food vil gæsterne blive budt på teknologi til alt fra selvmonitorering, altså, fx skridttællere
          og søvnmålere i apps, mobiltelefoner og ure, over Interaktive spil for både unge og gamle til teknologi til
          kognitiv og fysisk fitness.
        </p>
        <a href="/dokkx/aktiviteter/sundhed-traening.php">Sundhed og træning</a>
      </header>
      <figure><a href="/dokkx/aktiviteter/sundhed-traening.php"><img src="https://unsplash.it/500/425/?random"></a></figure>
    </article>
    <article class="itk-boxlist--item">
      <header>
        <h2 class="itk-boxlist--header"><a href="/dokkx/aktiviteter/book-rundvisning.php">Book en rundvisning</a></h2>
        <p>
          Alle er velkomne på DokkX i vores åbningstider. Du kan frit boltre dig blandt vores spændende teknologier, og
          her er altid en medarbejder, du kan spørge til råds om stort og småt.
        </p>
        <a href="/dokkx/aktiviteter/book-rundvisning.php">Book en rundvisning</a>
      </header>
      <figure><a href="/dokkx/aktiviteter/book-rundvisning.php"><img src="https://unsplash.it/500/400/?random"></a></figure>
    </article>
  </div>
  <?php include 'includes/_instagram.php'; ?>
</main>
<!--region.html.twig END-->

<?php include $path . '/_footer.php'; ?>
