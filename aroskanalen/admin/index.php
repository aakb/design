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
        <form class="form">
          <div class="form--group">
            <label for="username">Brugernavn</label>
            <input type="text" id="username" placeholder="Brugernavn">
          </div>
          <div class="form--group">
            <label for="password">Kodeord</label>
            <input type="password" id="password" placeholder="Password">
          </div>
          <div class="form--group">
            <input type="submit" class="button is-block" value="Login">
          </div>
          <div class="form--checkbox">
            <label>
              <input type="checkbox">
              Husk mig i 30 dage
            </label>
          </div>
        </form>
        <div class="well">
          <p>
            Problemer?
          </p>
          <ul>
            <li><a href="#">Jeg har glemt brugernavn eller kodeord</a></li>
            <li><a href="#">Jeg vil gerne oprette en ny bruger</a></li>
          </ul>
        </div>
      </div>
    </div>
</main>

<?php include_once $path . '/_footer.php'; ?>
