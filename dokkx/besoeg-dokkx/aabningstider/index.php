<?php
  include $_SERVER['DOCUMENT_ROOT']. '/dokkx/_settings.php';

  $class = 'is-page';
  $is_sub_active[1] = 1;

  include $path . '/_header.php';
  include $path . '/_menus.php';
?>

<main role="main" class="content">
  <?php include $path . '/includes/_image.php'; ?>
  <div class="content--inner">
    <h1 class="content--header">Åbningstider</h1>
    <div class="content--lead">
      <p>[Mangler tekst]</p>
    </div>
    <div class="content--text">
      <p>
        Mandag: Lukket<br>
        Tirsdag: 10.00 – 15.00<br>
        Onsdag: 10.00 – 15.00<br>
        Torsdag: 12.00 – 18.00<br>
        Fredag: 10.00 – 15.00<br>
        Første lørdag i måneden: 10.00 – 13.00
      </p>
    </div>
  </div>
</main>
<?php include $path . '/_footer.php'; ?>
