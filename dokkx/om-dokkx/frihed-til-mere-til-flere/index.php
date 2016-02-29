<?php
  include $_SERVER['DOCUMENT_ROOT']. '/dokkx/_settings.php';

  $class = 'is-page';
  $is_sub_active[2] = 1;

  include $path . '/_header.php';
  include $path . '/_menus.php';
?>

<main role="main" class="content">
  <?php include $path . '/includes/_image.php'; ?>
  <div class="content--inner">
    <h1 class="content--header">Frihed til mere til flere</h1>
    <div class="content--lead">
      <p>Mange mennesker får allerede flere muligheder og mere frihed i hverdagen med teknologi</p>
    </div>
    <div class="content--text">
      <p>
        Vi ved, at teknologi i forvejen er en del af mange menneskers hverdag – uanset og vi tænker over det eller ej.
        Aarhus Kommune har i flere år arbejdet med velfærdsteknologi. Især på ældre- og handicapområdet har teknologien
        givet mange mennesker muligheder og en frihed i hverdagen, de ellers ville være afskåret fra. Nu breder de gode
        løsninger sig, i takt med at teknologi bliver stadig billigere, smartere og lettere at gå til. Ved at skabe et rum
        på Dokk1, hvor alle kan føle, røre og lege med forskellige teknologiske løsninger, skal DokkX give inspiration til
        og viden om, hvordan teknologi gennem hele tilværelsen kan være et redskab til et lidt bedre, lidt sundere og lidt
        mere socialt liv. Det kan være teknologi til både krop og sind, og det kan være til at skabe et mere tilgængeligt,
        bæredygtigt og trygt byliv for os alle sammen.
      </p>
      <p class="content--inline-link">
        <a href="http://www.aarhus.dk/sitecore/content/Subsites/Velfaerdsteknologi/Home.aspx">
          Læs mere om Aarhus Kommunes arbejde med velfærdsteknologi
        </a>
      </p>
    </div>
    <div class="itk-boxlist">
      <?php include $path . '/includes/boxes/_rum-for-gentaenkning.php'; ?>
      <?php include $path . '/includes/boxes/_centrum-for-velfaerds-og-frihedsteknologi.php'; ?>
    </div>
  </div>
</main>
<?php include $path . '/_footer.php'; ?>
