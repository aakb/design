<?php
  $class = 'is-page';
  $is_group_active  = 1;
  $is_sub_active[1] = 1;

  include '../_header.php';
  include '../_menus.php';
?>

<main role="main" class="content">
  <?php include '../includes/_image.php'; ?>
  <div class="content--inner">
    <h1 class="content--header">Book en rundvisning</h1>
    <div class="content--lead">
      <p>[Mangler tekst]</p>
    </div>
    <div class="content--text">
      <p>
        Alle er velkomne på DokkX i vores åbningstider. Du kan frit boltre dig blandt vores spændende teknologier, og her
        er altid en medarbejder, du kan spørge til råds om stort og småt.
      </p>
      <p>
        Hvis du kommer fra en anden kommune, en organisation eller en forening kan du booke en rundvisning på DokkX.
        Så skriv ”Book rundvisning” i emnefeltet og send os en MAIL. Eller ring og hør nærmere på TLF.
      </p>
    </div>
    <fieldset>
      <legend>Book en rundvisning</legend>
      <div class="itk-message">
        <div class="itk-message--inner is-info">
          Tak for dine henvendelse, vi vender tilbage hurtigst muligt!
        </div>
      </div>
      <p>Vi har sendt en kopi af din henvendelse til <strong>mail@example.com</strong>, spørgsmål så kontakt os på: <a href="#">[Mangler e-mail]</a></p>
    </fieldset>
  </div>
</main>
<?php include $path . '/_footer.php'; ?>
