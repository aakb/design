<!--html.html.twig START-->
  <!--page.html.twig START-->
<body class="<?php echo $class; ?>">
  <div class="overlay js-menu-toggle"></div>
  <a href="/innovationscenteret" class="logo js-logo" title="Center for Innovation i Aarhus"><img src="images/assets/logo.svg"></a>
  <!--menu.html.twig START-->
  <nav class="nav js-nav">
    <div class="nav--links">
      <a class="nav--link<?php echo $is_active === 0 ? ' is-active' : '' ?>" href="ydelser.php">Ydelser</a>
      <a class="nav--link<?php echo $is_active === 1 ? ' is-active' : '' ?>" href="om-os.php">Om os</a>
      <a class="nav--link<?php echo $is_active === 2 ? ' is-active' : '' ?>" href="nyheder.php">Nyheder</a>
      <a class="nav--link<?php echo $is_active === 3 ? ' is-active' : '' ?>" href="kontakt.php">Kontakt</a>
      <a class="nav--link<?php echo $is_active === 4 ? ' is-active' : '' ?>" href="designguide.php">Design guide</a>
    </div>
  </nav>
  <!--menu.html.twig END-->
  <div class="nav-toggle js-menu-toggle">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
  <!--menu.html.twig START-->
  <nav class="hamburger-menu">
    <div class="hamburger-menu--inner">
      <div class="hamburger-menu--links">
        <a href="ydelser.php" class="nav--link<?php echo $is_active === 0 ? ' is-active' : '' ?>">Ydelser</a>
        <a class="nav--link is-sub <?php echo $is_sub_active === 0 ? ' is-active' : '' ?>" href="netvaerk
        .php">Netværk</a>
        <a class="nav--link is-sub <?php echo $is_sub_active === 1 ? ' is-active' : '' ?>" href="prototyper
        .php">Prototyper</a>
        <a class="nav--link is-sub <?php echo $is_sub_active === 1 ? ' is-active' : '' ?>" href="projektsamarbejde
          .php">Projektsamarbejde</a>
        <a href="om-os.php" class="nav--link<?php echo $is_active === 1 ? ' is-active' : '' ?>">Om os</a>
        <a href="nyheder.php" class="nav--link<?php echo $is_active === 2 ? ' is-active' : '' ?>">Nyheder</a>
        <a href="kontakt.php" class="nav--link<?php echo $is_active === 3 ? ' is-active' : '' ?>">Kontakt</a>
        <a href="designguide.php" class="nav--link<?php echo $is_active === 4 ? ' is-active' : '' ?>">Design
          guide</a>
      </div>
    </div>
  </nav>
  <!--menu.html.twig END-->
