<?php
  include '_header.php';
?>
<div class="header" role="banner" id="home">
  <div class="header--inner">
    <h1 class="header--text"><a href="/grafisk-service/" title="ITK DESIGN - grafisk Service">ITK DESIGN - Grafisk Service</a></h1>
  </div>
</div>

<main role="main" class="content">
  <div class="progress is-step-1 js-progress">
    <div class="progress--bar">
      <div class="progress--bar-transition js-progress-bar is-step-1"></div>
    </div>
    <div class="progress--container form--flex-wrapper">
      <div class="progress--item is-done js-progress-circle">
        <span class="progress--circle">1</span>
        <span class="progress--label">Dine informationer</span>
      </div>
      <div class="progress--item is-done">
        <span class="progress--circle">2</span>
        <span class="progress--label">Bestilling</span>
      </div>
      <div class="progress--item is-active">
        <span class="progress--circle">3</span>
        <span class="progress--label">Fakturering</span>
      </div>
      <div class="progress--item">
        <span class="progress--circle">4</span>
        <span class="progress--label">Levering</span>
      </div>
    </div>
  </div>
  <form class="form">
    <div class="form--page form--page-1 js-progress-page">
      <div class="form--page-description">
        <div class="form--label">Hvem bestiller opgaven?</div>
      </div>
      <div class="origin--field-container form--flex-wrapper js-origin-aakb-container is-hidden">
        <div class="form--item">
          <div class="form--label">Afdeling</div>
          <input type="text" placeholder="Vælg hvilken afdeling, der er tilknyttet opgaven" name="department">
        </div>
        <div class="form--item is-half-width">
          <div class="form--label">Telefon</div>
          <div class="form--phone-field-wrapper form--flex-wrapper">
            <input class="form--phone-field-input" type="text" name="phone">
            <div class="form--phone-field-prefix">+45</div>
          </div>
        </div>
        <div class="form--item is-half-width">
          <div class="form--label">Kontaktperson</div>
          <input type="text" placeholder="" name="surname">
        </div>
        <div class="form--item">
          <div class="form--label">E-mail</div>
          <input type="text" placeholder="" name="email">
        </div>
        <div class="buttons--container">
          <a href="#" class="button buttons--back js-back is-hidden is-grayscale">Tilbage</a>
          <a href="#" class="button buttons--forward js-forward">Fortsæt</a>
        </div>
      </div>
    </div>
    <div class="form--page form--page-2 form--flex-wrapper js-progress-page is-hidden">
      <div class="form--page-description">
        <div class="form--label">Beskrivelse af opgaven</div>
      </div>
      <div class="form--item">
        <div class="form--label">Titel</div>
        <input type="text" placeholder="Skriv en sigende titel for opgaven" name="task_title">
      </div>
      <div class="form--item">
        <div class="form--label">Produkttype</div>
        <input type="text" placeholder="Skriv f.eks folder, plakat, visitkort ..." name="product_type">
      </div>
      <div class="form--item is-half-width">
        <div class="form--label">Antal</div>
        <input type="text" placeholder="" name="product_type">
      </div>
      <div class="form--item">
        <div class="form--label">Kommentar</div>
        <textarea rows="8" cols="50" placeholder="Angiv produktspecifikationer. F.eks størrelse, materiale, typer, osv."></textarea>
      </div>
      <?php include '_fileupload.php';?>
      <div class="buttons--container">
        <a href="#" class="button buttons--back js-back is-grayscale">Tilbage</a>
        <a href="#" class="button buttons--forward js-forward">Fortsæt</a>
      </div>
    </div>
    <div class="form--page form--page-3 form--flex-wrapper js-progress-page is-hidden">
      <div class="form--page-description">
        <div class="form--label">Hvem skal betale?</div>
      </div>
      <div class="form--item is-half-width">
        <div class="form--label">Internt debitor nr./EAN-nummer</div>
        <input type="text" placeholder="F.eks 1234567891234" name="email">
      </div>
      <div class="form--item is-half-width">
        <div class="form--label">Betaling</div>
        <div class=" form--flex-wrapper form--checkbox-wrapper">
          <input type="checkbox" name="marketing" id="marketing" value="value">
          <label class="form--checkbox-label" for="marketing">Borgerservice og bibliotekers markedsføringskonto?</label>
          <a href="#" class="form--read-more js-toggle-modal"></a>
          <div class="modal js-modal is-hidden">
            <div class="modal--dialog js-modal-dialog is-hidden">
              <div class="modal--content">
                <div class="form--label">Markedsføringskonto</div>
                <div>
                  Markedsføringskontoen er en pulje i Borgerservice og Biblioteker til borgerrettet information om arrangementer og kurser i bibliotekerne samt generelle borgerservicekampagner.
                </div>
                <div class="buttons--container">
                  <a href="#" class="button modal--close js-toggle-modal">
                    Luk
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="buttons--container">
        <a href="#" class="button buttons--back js-back is-grayscale">Tilbage</a>
        <a href="#" class="button buttons--forward js-forward">Fortsæt</a>
      </div>
    </div>
    <div class="form--page form--page-4 form--flex-wrapper js-progress-page is-hidden">
      <div class="form--page-description">
        <div class="form--label">Hvor skal ordren leveres?</div>
      </div>
      <div class="form--item">
        <div class="form--label">Kommentar</div>
        <textarea rows="4" cols="50" placeholder="Har du kommentarer til leveringen? F.eks flere leveringsadresser."></textarea>
      </div>
      <div class="form--item is-half-width">
        <div class="form--label">Afdeling/institution</div>
        <input type="text" name="task_title">
      </div>
      <div class="form--item">
        <div class="form--label">Leveringsadresse</div>
        <input type="text" placeholder="" name="email">
      </div>
      <div class="form--item is-half-width">
        <div class="form--label">Postnummer</div>
        <input type="text" name="first_name">
      </div>
      <div class="form--item is-half-width">
        <div class="form--label">By</div>
        <input type="text" name="surname">
      </div>
      <div class="buttons--container">
        <a href="#" class="button buttons--back js-back is-grayscale">Tilbage</a>
        <a href="/grafisk-service/" class="button buttons--forward">Bestil</a>
      </div>
    </div>
  </form>
</main>