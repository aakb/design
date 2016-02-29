<?php
  include $_SERVER['DOCUMENT_ROOT']. '/dokkx/_settings.php';

  $class = 'is-page';
  $is_active        = 1;
  $is_group_active  = 1;
  $is_sub_active[1] = 1;

  include $path . '/_header.php';
  include $path . '/_menus.php';
?>

<main role="main" class="content">
  <?php include $path . '/includes/_image.php'; ?>
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
        <div class="itk-message--inner is-error">
          Du skal udfylde felterne <strong>Navn</strong> og <strong>E-mail</strong>
        </div>
      </div>
      <p>Udfyld formularen for at booke en rundvisning, vi skal bruge dit navn og e-mail adresse for at kontakte dig.</p>
      <form class="content-form">
        <div class="content-form--item">
          <label for="name">Navn</label>
          <input id="name" type="text" placeholder="Indtast dit fulde navn" class="is-error" required>
        </div>
        <div class="content-form--item">
          <label for="email">E-mail</label>
          <input id="email" type="email" placeholder="Indtast e-mail adresse" class="is-error" required>
        </div>
        <div class="content-form--item">
          <label for="message">Evt. besked</label>
          <textarea id="message" placeholder="Skriv evt. en besked"></textarea>
        </div>
        <a href="book-rundvisning-form-accepted.php" class="button">Send forespørgsel</a>
      </form>
    </fieldset>
  </div>
</main>
<?php include $path . '/_footer.php'; ?>
