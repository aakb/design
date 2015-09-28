<?php
  include '_header.php';
  include '_menus.php';
?>

<div class="header" role="banner" id="home" style="background: url('https://unsplash.it/3200/2400/?random') no-repeat left;">

    <div class="header--inner">
    <h1 class="header--big">The big header</h1>
    <p class="header--sub">This is some optional text we can either keep or delete</p>
    <div class="header--button-wrapper"><a href="#" class="header--button-link" data-scroll>Look at me!</a></div>
  </div>
</div>
<main role="main">
  <div class="content frontpage">
    <p class="lead">Est notare quam littera gothica quam nunc putamus! Autem vel eum iriure dolor in hendrerit: in vulputate velit esse molestie.

    <div class="itk-boxlist is-side-by-side">
      <?php
        include '_eventbox.php';
      ?>
      <?php
        include '_eventbox.php';
      ?>
    </div>
    <div class="frontpage--more-link">
      <span class="frontpage--more-button">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 792" enable-background="new 0 0 612 792" xml:space="preserve">
          <path d="M501.4,396L501.4,396L501.4,396L193.6,700.3l-86.4-86.4L325,396L107.2,178.2l86.4-86.4L501.4,396z"></path>
        </svg>
        <a href="event-list.php">Se alle events</a>
      </span>
    </div>

    <div class="itk-boxlist is-side-by-side">
      <?php
        include '_newsbox.php';
      ?>
      <?php
        include '_newsbox.php';
      ?>
    </div>
    <div class="itk-boxlist is-side-by-side">
      <?php
        include '_newsbox.php';
      ?>
      <?php
        include '_newsbox.php';
      ?>
    </div>
    <div class="frontpage--more-link">
      <span class="frontpage--more-button">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 612 792" enable-background="new 0 0 612 792" xml:space="preserve">
          <path d="M501.4,396L501.4,396L501.4,396L193.6,700.3l-86.4-86.4L325,396L107.2,178.2l86.4-86.4L501.4,396z"></path>
        </svg>
        <a href="news-list.php">Se alle nyheder</a>
      </span>
    </div>
  </div>
</main>

<?php
  include '_footer.php';
?>

