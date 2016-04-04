<?php
  include_once $_SERVER['DOCUMENT_ROOT']. '/aroskanalen/admin/_settings.php';

  $class = 'is-frontpage';

  include_once $path . '/_header.php';
?>

<main role="main" class="content">
  <div class="content--inner">
    <div class="container">
      <div class="container--inner">
        <h1 class="logo js-logo" title="Aroskanalen">
          <i class="material-icons">filter_none</i>
          <span class="logo--text">Aroskanalen</span>
          <span class="logo--slogan">Some fancy slogan copy here</span>
        </h1>
      </div>
    </div>
    <div class="container">
      <div class="container--inner">
        <h2 class="has-lg-spacing">Login</h2>
        <form action="screen" method="post" role="form">
          <label>Brugernavn</label>
          <input type="text" placeholder="Brugernavn">
          <label>Kodeord</label>
          <input type="password" placeholder="Kodeord">
          <input type="submit" class="button is-block" value="Login">
          <div class="form--checkbox">
            <label>
              <input type="checkbox">
              Husk mig i 30 dage
            </label>
          </div>
        </form>
        <p>
          Problemer med at logge ind?
        </p>
        <ul>
          <li><a href="#">Jeg har glemt mit brugernavn eller kodeord.</a></li>
        </ul>
      </div>
    </div>
</main>

<?php include_once $path . '/_footer.php'; ?>
