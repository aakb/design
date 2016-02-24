<?php
  $class = 'is-frontpage';

  include '_header.php';
  include '_menus.php';
?>
<!--region.html.twig START-->
<div class="header" role="banner" id="home">
  <div class="header--inner">
    <h1 class="header--big">ITKore - The site behind it all</h1>
    <p class="header--lead">
    This is a header lead
    </p>
    <p class="header--sub">
    This is a header sub.
    </p>
    <div class="header--button-wrapper">
      <a href="#" class="header--button-link">button</a>
    </div>
  </div>
</div>

<main role="main" class="content">
  <?php include 'includes/_instagram.php'; ?>
</main>
<!--region.html.twig END-->

<?php
  include '_footer.php';
?>
