<?php
  include $_SERVER['DOCUMENT_ROOT']. '/devteam/_settings.php';

  $class = 'is-page';
  $is_sub_active[0] = 4;

  include $path . '/_header.php';
  include $path . '/_menus.php';
?>

<?php include $path . '/includes/_image.php'; ?>
<main role="main" class="content">
  <div class="content--inner">
    <h1 class="content--header">AAKB/DDB CMS</h1>
    <div class="content--lead">
      <p>[Mangler tekst]</p>
    </div>
    <div class="content--text">
      <p>Selvbetjeningsløsning, bruges af 60 kommuner i landet. Vi har været involveret i den grundlæggende udvikling af systemet og er stadig med som en del af core team og projektledelse.</br>
Link: <a href="https://www.aakb.dk/">https://www.aakb.dk/</a> </p>
    </div>
    <div class="itk-boxlist">
      <?php include $path . '/includes/boxes/_sundhed-traening.php'; ?>
    </div>
  </div>
</main>
