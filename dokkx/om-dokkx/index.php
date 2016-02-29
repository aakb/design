<?php
  include $_SERVER['DOCUMENT_ROOT']. '/dokkx/_settings.php';

  $class = 'is-page';
  $is_active       = 2;
  $is_group_active = 2;

  include $path . '/_header.php';
  include $path . '/_menus.php';
?>

<main role="main" class="content">
  <?php include '../includes/_image.php'; ?>
  <div class="content--inner">
    <h1 class="content--header">Om DokkX</h1>
    <div class="content--lead">
      <p>Centrum for velfærds- og frihedsteknologi</p>
    </div>
    <div class="content--text">
      <p>
        Vi ved, at teknologi i forvejen er en del af mange menneskers hverdag – uanset og vi tænker over det eller ej.
        Ved at skabe et rum på Dokk1, hvor alle kan føle, røre og lege med forskellige teknologiske løsninger, skal DokkX
        give inspiration til og viden om, hvordan teknologi gennem hele tilværelsen kan være et redskab til et lidt bedre,
        lidt sundere og lidt mere socialt liv. Det kan være teknologi til både krop og sind, og det kan være til at skabe
        et mere tilgængeligt, bæredygtigt og trygt byliv for os alle sammen.
      </p>
    </div>
    <div class="itk-boxlist">
      <?php include $path . '/includes/boxes/_frihed-til-mere-til-flere.php'; ?>
      <?php include $path . '/includes/boxes/_rum-for-gentaenkning.php'; ?>
      <?php include $path . '/includes/boxes/_centrum-for-velfaerds-og-frihedsteknologi.php'; ?>
    </div>
  </div>
</main>
<?php include $path . '/_footer.php'; ?>
