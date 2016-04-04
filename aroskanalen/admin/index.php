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
        <h2>Login</h2>
        <div class="login--form">
          <form action="/login_check" method="post" role="form">
            <input type="hidden" name="_csrf_token" value="2NofnmUtcTMA7purLt9gmpPmyrytRhzBYB1DqDzjm5g">

            <div class="login--name">
              <label for="username">Brugernavn</label>
              <input type="text" class="login--name-input" id="username" name="_username" value="" required="required" placeholder="Brugernavn">
            </div>

            <div class="login--pass">
              <label for="password">Kodeord</label>
              <input type="password" class="login--pass-input" id="password" name="_password" required="required" placeholder="Kodeord">
            </div>

            <input type="submit" id="_submit" name="_submit" class="button" value="Login">

            <div class="login--remember-me">
              <input type="checkbox" id="remember_me" class="login--remember-me-checkbox" name="_remember_me" value="on">
              <label for="remember_me" class="login--remember-me-label">Husk mig</label>
            </div>
          </form>
        </div>
        <div class="login--problem">
          <p class="login--content-list-header">Problemer med at logge ind?</p>
          <ul class="login--content-list">
            <li><a href="/resetting/request">Jeg har glemt mit brugernavn eller kodeord.</a></li>
          </ul>
        </div>
      </div>
    </div>
</main>

<?php include_once $path . '/_footer.php'; ?>
