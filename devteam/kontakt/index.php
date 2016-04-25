<?php
  include $_SERVER['DOCUMENT_ROOT']. '/devteam/_settings.php';

  $class = 'is-page';
  $is_active = 3;

  include $path . '/_header.php';
  include $path . '/_menus.php';
?>

<main role="main" class="content">
  <?php include '../includes/_image.php'; ?>
  <div class="administration--tabs">
    <ul>
      <li><a href="/dette-er-en-side" class="is-active">View</a></li>
      <li><a href="/node/27/edit">Edit</a></li>
      <li><a href="/node/27/delete">Delete</a></li>
    </ul>
  </div>
  <div class="content--inner">
    <h1 class="content--header">Kontakt ITK Devteam</h1>
    <div class="content--lead">
      <p>[Mangler tekst]</p>
    </div>
    <div class="content--text">
      <p>[Mangler tekst]</p>
    </div>
    <div class="itk-boxlist">
      <article class="itk-boxlist--item">
        <header>
          <h2 class="itk-boxlist--header"><a href="#">[Mangler tekst]</a></h2>
          <p>[Mangler tekst]</p>
          <a href="#">[Mangler tekst]</a>
        </header>
        <figure><a href="#"><img src="https://unsplash.it/500/500/?random"</a></figure>
      </article>
    </div>
  </div>
</main>
