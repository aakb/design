<?php
  $class = 'is-page';
  $is_active        = 1;
  $is_group_active  = 1;

  include '../_header.php';
  include '../_menus.php';
?>

<main role="main" class="content">
  <?php include '../includes/_image.php'; ?>
  <div class="content--inner">
    <h1 class="content--header">Besøg DokkX</h1>
    <div class="content--lead">
      <p>[Mangler tekst]</p>
    </div>
    <div class="content--text">
      <p>[Mangler tekst]</p>
    </div>
    <div class="itk-boxlist">
      <article class="itk-boxlist--item">
        <header>
          <h2 class="itk-boxlist--header"><a href="/dokkx/besoeg-dokkx/book-rundvisning.php">Book en rundvisning</a></h2>
          <p>
            Alle er velkomne på DokkX i vores åbningstider. Du kan frit boltre dig blandt vores spændende teknologier, og
            her er altid en medarbejder, du kan spørge til råds om stort og småt.
          </p>
          <a href="/dokkx/besoeg-dokkx/book-rundvisning.php">Book en rundvisning</a>
        </header>
        <figure><a href="/dokkx/besoeg-dokkx/book-rundvisning.php"><img src="https://unsplash.it/500/400/?random"></a></figure>
      </article>
    </div>
    <?php include 'includes/_instagram.php'; ?>
  </div>
</main>
<?php include $path . '/_footer.php'; ?>
