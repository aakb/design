<?php
  $class = 'is-frontpage';

  include '_header.php';
  include '_menus.php';
?>

<div class="header" role="banner" id="home">
  <div class="header--inner">
    <h1 class="header--big">Vi er et fælles mødested for innovation i Aarhus Kommune</h1>
    <p class="header--lead">
      Vi understøtter udviklingsarbejdet med værkstedsfaciliteter, og indgår som projektpartner med stærke faglige
      kompetencer indenfor design, antropologi og procesfacilitering.
    </p>
    <p class="header--sub">﻿Lær os at kende og læs mere om, hvordan du kan <a href="#">bruge os</a> i dit arbejde her.</p>
    <div class="header--button-wrapper">
      <a href="ydelser.php" class="header--button-link is-primary">Ydelser</a>
    </div>
  </div>
</div>
<main role="main">
  <div class="itk-boxlist">
    <article class="itk-boxlist--item">
      <header>
        <h2 class="itk-boxlist--header"><a href="ydelser.php#network">Netværk</a></h2>
      </header>
      <figure class="svginclude"><a href="ydelser.php#network"><?php include 'images/icons/networking.php'; ?></a></figure>
      <p>Praeterea iter est quasdam res quas ex communi.</p>
      <a href="ydelser.php#network" class="itk-boxlist--link">This is the link</a>
    </article>
    <article class="itk-boxlist--item">
      <header>
        <h2 class="itk-boxlist--header">Prototyper</h2>
      </header>
      <figure class="svginclude"><?php include "images/icons/prototypes.php"; ?></figure>
      <p>Praeterea iter est quasdam res quas ex communi.</p>
      <a href="#" class="itk-boxlist--link">This is the link</a>
    </article>
    <article class="itk-boxlist--item">
      <header>
        <h2 class="itk-boxlist--header">Projektsamarbejde</h2>
      </header>
      <figure class="svginclude"><?php include "images/icons/collaboration.php"; ?></figure>
      <p>Praeterea iter est quasdam res quas ex communi.</p>
      <a href="#" class="itk-boxlist--link">This is the link</a>
    </article>
  </div>
  <div class="itk-boxlist">
    <article class="itk-boxlist--item">
      <header>
        <h2 class="itk-boxlist--header">Faciliteter</h2>
      </header>
      <figure class="svginclude"><?php include "images/icons/facilities.php"; ?></figure>
      <p>Praeterea iter est quasdam res quas ex communi.</p>
      <a href="#" class="itk-boxlist--link">This is the link</a>
    </article>
    <article class="itk-boxlist--item">
      <header>
        <h2 class="itk-boxlist--header">Sparring</h2>
      </header>
      <figure class="svginclude"><?php include "images/icons/sparring.php"; ?></figure>
      <p>Praeterea iter est quasdam res quas ex communi.</p>
      <a href="#" class="itk-boxlist--link">This is the link</a>
    </article>
    <article class="itk-boxlist--item">
      <header>
        <h2 class="itk-boxlist--header">Kurser</h2>
      </header>
      <figure class="svginclude"><?php include "images/icons/courses.php"; ?></figure>
      <p>Praeterea iter est quasdam res quas ex communi.</p>
      <a href="#" class="itk-boxlist--link">This is the link</a>
    </article>
  </div>
</main>
<?php
  include '_footer.php';
?>
