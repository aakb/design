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
  <h2>Headlines</h2>
  <fieldset>
    <h1>Headline 1</h1>
    <h2>Headline 2</h2>
    <h3>Headline 3</h3>
    <h4>Headline 4</h4>
    <h5>Headline 5</h5>
    <h6>Headline 6</h6>
  </fieldset>
  <br><br>
  <h2>Messages</h2>
  <fieldset>
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
  <br><br>
  <fieldset>
    <h2>Link</h2>
    Paullum deliquit, <a href="#">ponderibus modulisque</a> suis ratio utitur. Magna pars studiorum, prodita quaerimus.
  </fieldset>
  <br><br>
  <h2>Button</h2>
  <fieldset>
    <a href="#" class="button">This is a button</a>
    <br><br>
    <a href="#" class="button is-block">This is a block button</a>
  </fieldset>
  <br><br>
  <h2>Pager</h2>
  <fieldset>
    <?php include 'includes/_pager.php'; ?>
  </fieldset>
  <h2>Instagram Gallery</h2>
  <fieldset>
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
<?php
  include '_footer.php';
?>
