<?php
  $class = 'is-frontpage';

  include '_header.php';
  include '_menus.php';
?>
<!--region.html.twig START-->
<div class="header" role="banner" id="home">
  <div class="header--inner">
    <h1 class="header--text">Grafisk Service</h1>
  </div>
</div>
<!--region.html.twig END-->

<main role="main" class="content">
  <div class="content--lead">
    Bestilling af opgaver ved Grafisk Service, ITK Design.
  </div>
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
        <span class="progress--label">Levering</span>
      </div>
    </div>
  </div>
  <form class="form">
    <div class="form--page form--page-1 js-progress-page">
      <div class="origin form--flex-wrapper">
        <div class="form--label">Hvor er du fra?</div>
        <div class="origin--item js-origin-aakb">
          <input type="radio" name="origin" value="aak-bib" id="origin-aak-bib" class="origin--input">
          <label for="origin-aak-bib" class="option">
            <span class="origin--label-inner">Aarhus kommunes biblioteker<span class="origin--label-inner-sub">Jeg bestiller opgaven for bibliotekerne</span></span>
            <span class="origin--check"></span>
          </label>
        </div>
        <div class="origin--item js-origin-other">
          <input type="radio" name="origin" value="other" id="origin-other" class="origin--input">
          <label for="origin-other" class="option">
            <span class="origin--label-inner">Andet<span class="origin--label-inner-sub">Jeg bestiller opgaven fra et andet sted i Aarhus Kommune</span></span>
            <span class="origin--check"></span>
          </label>
        </div>
      </div>
      <div class="origin--group-wrapper">
        <div class="origin--field-container form--flex-wrapper js-origin-aakb-container is-hidden">
          <div class="form--item">
            <div class="form--label">Afdeling</div>
            <input type="text" placeholder="Vælg hvilken afdeling der er tilknyttet opgaven" name="department">
          </div>
          <div class="form--item is-half-width">
            <div class="form--label">Fornavn</div>
            <input type="text" placeholder="Skriv dit fornavn" name="first_name">
          </div>
          <div class="form--item is-half-width">
            <div class="form--label">Efternavn</div>
            <input type="text" placeholder="Skriv dit efternavn" name="surname">
          </div>
          <div class="form--item">
            <div class="form--label">E-mail</div>
            <input type="text" placeholder="Skriv din e-mail f.eks. mail@example.com" name="email">
          </div>
          <div class="form--item is-half-width">
            <div class="form--label">Phone</div>
            <input type="text" placeholder="+45" name="phone">
          </div>
          <div class="form--item is-half-width">
            <div class="form--label">Debitor -/EAN-nummer</div>
            <input type="text" placeholder="F.eks 1234567891234" name="email">
          </div>
          <div class="form--item form--flex-wrapper form--checkbox-wrapper">
            <input type="checkbox" name="marketing" id="marketing" value="value">
            <label class="form--checkbox-label" for="marketing">Skal bestillingen tilføjes til markedsføringskontoen?</label>
          </div>
          <div class="buttons--container">
            <div class="button buttons--back js-back is-hidden">Tilbage</div>
            <div class="button buttons--forward js-forward">Fortsæt</div>
          </div>
        </div>
        <div class="origin--field-container form--flex-wrapper js-origin-other-container is-hidden">
          <div class="form--item is-half-width">
            <div class="form--label">Fornavn</div>
            <input type="text" placeholder="Skriv dit fornavn" name="first_name">
          </div>
          <div class="form--item is-half-width">
            <div class="form--label">Efternavn</div>
            <input type="text" placeholder="Skriv dit efternavn" name="surname">
          </div>
          <div class="form--item">
            <div class="form--label">Adresse</div>
            <input type="text" placeholder="Skriv din adresse" name="email">
          </div>
          <div class="form--item is-half-width">
            <div class="form--label">Postnr</div>
            <input type="text" placeholder="8000" name="first_name">
          </div>
          <div class="form--item is-half-width">
            <div class="form--label">By</div>
            <input type="text" placeholder="Aarhus" name="surname">
          </div>
          <div class="form--item">
            <div class="form--label">E-mail</div>
            <input type="text" placeholder="Skriv din e-mail f.eks. mail@example.com" name="email">
          </div>
          <div class="form--item is-half-width">
            <div class="form--label">Phone</div>
            <input type="text" placeholder="+45" name="phone">
          </div>
          <div class="form--item is-half-width">
            <div class="form--label">Debitor -/EAN-nummer</div>
            <input type="text" placeholder="F.eks 1234567891234" name="email">
          </div>
          <div class="buttons--container">
            <div class="button buttons--back js-back is-hidden">Tilbage</div>
            <div class="button buttons--forward js-forward">Fortsæt</div>
          </div>
        </div>
      </div>
    </div>
    <div class="form--page form--page-2 form--flex-wrapper js-progress-page is-hidden">
      <div class="form--item">
        <div class="form--label">Opgavens titel</div>
        <input type="text" placeholder="Skriv titel" name="task_title">
      </div>
      <div class="form--item">
        <div class="form--label">Produkttype</div>
        <input type="text" placeholder="Plakat, flyer, rollup, el.lign." name="product_type">
      </div>
      <div class="form--item is-half-width">
        <div class="form--label">Antal</div>
        <input type="text" placeholder="Hvor mange skal du bruge?" name="product_type">
      </div>
      <div class="form--item">
        <div class="form--label">Kommentar</div>
        <textarea rows="8" cols="50" placeholder="Angiv produktspecifikationer..."></textarea>
      </div>
      <?php include '_fileupload.php';?>
      <div class="buttons--container">
        <div class="button buttons--back js-back">Tilbage</div>
        <div class="button buttons--forward js-forward">Fortsæt</div>
      </div>
    </div>
    <div class="form--page form--page-3 form--flex-wrapper js-progress-page is-hidden">
      <div class="form--item is-half-width">
        <div class="form--label">Ønsket leveringsdato</div>
        <input type="text" placeholder="21.07.1981" name="task_title">
      </div>
      <div class="form--item">
        <div class="form--label">Leveringsadresse</div>
        <input type="text" placeholder="Skriv din ønskede leveringsadresse" name="email">
      </div>
      <div class="form--item is-half-width">
        <div class="form--label">Postnr</div>
        <input type="text" placeholder="8000" name="first_name">
      </div>
      <div class="form--item is-half-width">
        <div class="form--label">By</div>
        <input type="text" placeholder="Aarhus" name="surname">
      </div>
      <div class="buttons--container">
        <div class="button buttons--back js-back">Tilbage</div>
        <div class="button buttons--forward js-forward">Fortsæt</div>
        <a href="/grafisk-service/" class="button buttons--forward">Indsend</a>
      </div>
    </div>
  </form>
</main>