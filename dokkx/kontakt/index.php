<?php
  include $_SERVER['DOCUMENT_ROOT']. '/dokkx/_settings.php';

  $class = 'is-page';
  $is_active = 4;

  include $path . '/_header.php';
  include $path . '/_menus.php';
?>

<main role="main" class="content">
  <?php include '../includes/_image.php'; ?>
  <div class="administration--tabs">
    <ul>
      <li><a href="/dette-er-en-side" data-drupal-link-system-path="node/27" class="is-active">View<span class="visually-hidden">(active tab)</span></a></li>
      <li><a href="/node/27/edit" data-drupal-link-system-path="node/27/edit">Edit</a></li>
      <li><a href="/node/27/delete" data-drupal-link-system-path="node/27/delete">Delete</a></li>
    </ul>
  </div>
  <div class="content--inner">
    <h1 class="content--header">Kontakt DokkX</h1>
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
<?php include $path . '/_footer.php'; ?>
