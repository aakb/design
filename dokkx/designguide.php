<?php
  $class = 'is-page';
  $is_active       = 0;
  $is_group_active = 0;

  include '_header.php';
  include '_menus.php';
?>

<?php include $path . '/includes/_image.php'; ?>
<main role="main" class="content">
  <h1 class="content--header">Designguide</h1>
  <!--node--basic.html.twig START-->
  <!--field.html.twig START-->
  <div class="content--text">
    <p>
      Denne designguide indeholder eksempler på elementer til brug i udviklingen, det er f.eks. systembeskeder,
      cookie meddelelse og lignende.
    </p>
  </div>
  <fieldset>
    <legend>Headlines</legend>
    <h1>Headline 1</h1>
    <h2>Headline 2</h2>
    <h3>Headline 3</h3>
    <h4>Headline 4</h4>
    <h5>Headline 5</h5>
    <h6>Headline 6</h6>
  </fieldset>
  <fieldset>
    <legend>Messages</legend>
    <div class="itk-message">
      <div class="itk-message--inner">
        This is a <strong>standard</strong> message
      </div>
    </div>
    <div class="itk-message">
      <div class="itk-message--inner is-info">
        This is just for your <strong>information</strong>
      </div>
    </div>
    <div class="itk-message">
      <div class="itk-message--inner is-warning">
        This is a <strong>warning</strong>
      </div>
    </div>
    <div class="itk-message">
      <div class="itk-message--inner is-error">
        This is an <strong>error</strong>
      </div>
    </div>
  </fieldset>
  <fieldset>
    <legend>Link</legend>
    Paullum deliquit, <a href="#">ponderibus modulisque</a> suis ratio utitur. Magna pars studiorum, prodita quaerimus.
  </fieldset>
  <fieldset>
    <legend>Button</legend>
    <p>
      <a href="#" class="button">This is a button</a>
    </p>
    <p>
      <a href="#" class="button is-block">This is a block button</a>
    </p>
  </fieldset>
  <fieldset>
    <legend>Forms</legend>
    <div class="content-form">
      <div class="content-form--item">
        <label for="name">Label</label>
        <input id="name" type="text">
      </div>
      <div class="content-form--item">
        <label for="name">Disabled</label>
        <input id="name" type="text" disabled>
      </div>
      <a href="#" class="button">This is the button for the form</a>
    </div>
  </fieldset>
  <fieldset>
    <legend>Pager</legend>
    <?php include 'includes/_pager.php'; ?>
  </fieldset>
  <fieldset>
    <legend>Instagram Gallery</legend>
    <?php include 'includes/_instagram.php'; ?>
  </fieldset>
  <!-- Cookies -->
  <div id="js-cookies" class="cookies">
    <div class="cookies--inner">
      <span class="cookies--text">Vi benytter cookies.</span>
      <span class="cookies--agree">
      <span class="button js-cookies--agree">Ok det er i orden</span>
    </span>
    </div>
  </div>
</main>
<?php include $path . '/_footer.php'; ?>
