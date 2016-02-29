<?php
  include $_SERVER['DOCUMENT_ROOT']. '/dokkx/_settings.php';

  $class = 'is-page';
  $is_sub_active[2] = 3;

  include $path . '/_header.php';
  include $path . '/_menus.php';
?>

<main role="main" class="content">
  <?php include $path . '/includes/_image.php'; ?>
  <div class="content--inner">
    <h1 class="content--header">Centrum for velfærds- og Frihedsteknologi</h1>
    <div class="content--lead">
      <p>Pulserende, dynamisk og afvekslende teknologisk prøverum</p>
    </div>
    <div class="content--text">
      <p>
        DokkX adskiller sig fra andre udstillings- og demonstrationsfaciliteter rundt omkring i Danmark på en række
        punkter. Først og fremmest ligger vi lige midt i byen. Vores centrale og lettilgængelige placering på Dokk1
        giver de fleste mulighed for at besøge os. Det er praktisk, for vi tror, at der på DokkX er noget at komme efter
        for alle. Udstillingerne på DokkX er afvekslende og dynamiske. I samarbejde med brugerorganisationer,
        producenter og andre interessenter sætter vi løbende fokus på forskellige temaer fra tilværelsen.
      </p>
      <h3>Facts</h3>
      <p>
        Placering: Dokk1, Hack Kampmanns Plads 2, 8000 Aarhus C<br>
        Størrelse: 250 m2<br>
        Åbning: Forår 2016
      </p>
    </div>
    <div class="itk-boxlist">
      <?php include $path . '/includes/boxes/_frihed-til-mere-til-flere.php'; ?>
      <?php include $path . '/includes/boxes/_rum-for-gentaenkning.php'; ?>
    </div>
  </div>
</main>
<?php include $path . '/_footer.php'; ?>
