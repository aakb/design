<?php
  include $_SERVER['DOCUMENT_ROOT']. '/devteam/_settings.php';

  $class = 'is-page';
  $is_sub_active[0] = 2;

  include $path . '/_header.php';
  include $path . '/_menus.php';
?>

<main role="main" class="content">
  <?php include $path . '/includes/_image.php'; ?>
  <div class="content--inner">
    <h1 class="content--header">Aroskanalen</h1>
    <div class="content--lead">
      <p>[Mangler tekst]</p>
    </div>
    <div class="content--text">
      <p>
        Værktøj til visning af indhold på skærme. Bliver brugt på bl.a. Rådhuset og Dokk1, i sidstnævnte håndteres der 100+ skærme.</br>
        Jeg har lavet en demobruger til jer:</br>
        Brugernavn:</br>
        Kodeord:</br>
        For at oprette indhold skal I logge ind på: <a href="https://admin-demo.aroskanalen.dk">https://admin-demo.aroskanalen.dk</a></br>
        Hurtig vejledning:</br>
        Opret en slide</br>
        Opret kanal</br>
        Opret skærm</br>
        Indsæt kanal på skærm</br>
        Når I har oprettet en skærm får I en aktiveringskode, den skal I indsætte på: <a href="https://screen-demo.aroskanalen.dk">https://screen-demo.aroskanalen.dk</a>
    </div>
  </div>
</main>
