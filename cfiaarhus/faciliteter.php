<?php
  $class = 'is-page';

  include '_header.php';
  include '_menus.php';
?>

<main role="main" class="content">
  <h1>Faciliteter</h1>
  <div class="content--text">
    <strong>Du inspireres og inspirer andre</strong><br>
    <p>Til dig der gerne vil dele din erfaring og inspireres af andre kollegaer og eksperter tilbyder Center for
      Innovation i Aarhus deltagelse i vores innovationsnetværk. Her møder du kollegaer i Aarhus Kommune, der
      arbejder med innovation ligesom dig.</p>
    <p>Når du deltager i innovationsnetværket har du adgang til:</p>
    <ul>
      <li>Morgen- og gå-hjem-møder med inspirerende interne og eksterne oplæg</li>
      <li>Konferencer, temadage og større events</li>
      <li>Matchmaking</li>
      <li>Nyhedsmails med inspiration til jeres daglige arbejde med innovation</li>
      </li>
    </ul>
  </div>
  <div class="itk-boxlist-column">
    <?php
      include 'includes/_network.php';
    ?>
    <?php
      include 'includes/_prototypes.php';
    ?>
    <?php
      include 'includes/_collaboration.php';
    ?>
  </div>
</main>
<?php
  include '_footer.php';
?>
