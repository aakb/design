<?php
  include $_SERVER['DOCUMENT_ROOT']. '/dokkx/_settings.php';

  $class = 'is-page';
  $is_sub_active[2] = 2;

  include $path . '/_header.php';
  include $path . '/_menus.php';
?>

<main role="main" class="content">
  <?php include $path . '/includes/_image.php'; ?>
  <div class="content--inner">
    <h1 class="content--header">Rum for gentænking</h1>
    <div class="content--lead">
      <p>Et innovativt miljø for afsmittende samtaler og samarbejde</p>
    </div>
    <div class="content--text">
      <p>
        Ud over at vise moderne velfærdsteknologi er DokkX et unikt samlingspunkt, hvor der kan opstå nye samarbejder
        mellem erhvervsliv, uddannelses- og forskningsinstitutioner, Aarhus Kommune og byens borgere.
        Når DokkX ønsker at rumme og samle forskellige grupper, fagligheder, synspunkter fra og perspektiver på
        tilværelsen. Det gør vi med en ambition om, at der opblomstrer et innovativt miljø for afsmittende samtaler og
        samarbejde om alt fra samfundsforskning til udvikling af fremtidens teknologiske løsninger.
      </p>
    </div>
    <div class="itk-boxlist">
      <?php include $path . '/includes/boxes/_frihed-til-mere-til-flere.php'; ?>
      <?php include $path . '/includes/boxes/_centrum-for-velfaerds-og-frihedsteknologi.php'; ?>
    </div>
  </div>
</main>

