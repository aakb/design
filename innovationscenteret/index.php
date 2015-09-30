<?php
  include '_header.php';
  include '_menus.php';
?>

<div class="header" role="banner" id="home">
  <div class="header--inner">
    <h1 class="header--big">Hej.</h1>
    <p class="header--lead">Vi er Center for Innovation i Aarhus, vi understøtter og styrker arbejdet med innovation i Aarhus.</p>
    <p class="header--sub">Vi kan hjælpe jer med servicedesign, research, processer og meget andet. Tøv ikke med at <a href="#">skrive til os</a> eller lær os at kende først!</p>
    <div class="header--button-wrapper">
    <a href="#" class="header--button-link is-primary">Ydelser</a>
  </div>
</div>
</div>
<main role="main">
  <!-- ITK boxlist side by side -->
  <div class="itk-boxlist is-side-by-side">
    <article class="itk-boxlist--item">
      <header>
        <h2 class="itk-boxlist--header">Netværk</h2>
      </header>
      <figure><?php include 'images/icons/networking.php'; ?></figure>
      <p>Praeterea iter est quasdam res quas ex communi.</p>
      <a href="#">This is the link</a>
    </article>
    <article class="itk-boxlist--item">
      <header>
        <h2 class="itk-boxlist--header">Prototyper</h2>
      </header>
      <figure><?php include "images/icons/prototypes.php"; ?></figure>
      <p>Praeterea iter est quasdam res quas ex communi.</p>
      <a href="#">This is the link</a>
    </article>
    <article class="itk-boxlist--item">
      <header>
        <h2 class="itk-boxlist--header">Projektsamarbejde</h2>
      </header>
      <figure><?php include "images/icons/collaboration.php"; ?></figure>
      <p>Praeterea iter est quasdam res quas ex communi.</p>
      <a href="#">This is the link</a>
    </article>
  </div>
  <div class="itk-boxlist is-side-by-side">
    <article class="itk-boxlist--item">
      <header>
        <h2 class="itk-boxlist--header">Faciliteter</h2>
      </header>
      <figure><?php include "images/icons/facilities.php"; ?></figure>
      <p>Praeterea iter est quasdam res quas ex communi.</p>
      <a href="#">This is the link</a>
    </article>
    <article class="itk-boxlist--item">
      <header>
        <h2 class="itk-boxlist--header">Sparring</h2>
      </header>
      <figure><?php include "images/icons/sparring.php"; ?></figure>
      <p>Praeterea iter est quasdam res quas ex communi.</p>
      <a href="#">This is the link</a>
    </article>
    <article class="itk-boxlist--item">
      <header>
        <h2 class="itk-boxlist--header">Kurser</h2>
      </header>
      <figure><?php include "images/icons/courses.php"; ?></figure>
      <p>Praeterea iter est quasdam res quas ex communi.</p>
      <a href="#">This is the link</a>
    </article>
  </div>
</main>
<?php
  include '_footer.php';
?>
