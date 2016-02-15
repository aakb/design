<!--html.html.twig START-->
  <!--page.html.twig START-->
<body class="<?php echo $class; ?>">
  <div class="overlay js-menu-toggle"></div>
  <a href="/dokkx" class="logo js-logo" title="Center for Innovation i Aarhus"><img src="/dokkx/images/assets/logo.svg"></a>
  <!--menu.html.twig START-->
  <nav class="nav js-nav">
    <div class="nav--links">
      <a class="nav--link<?php echo $is_active === 0 ? ' is-active' : '' ?>" href="aktivitet.php">Aktivitet</a>
      <a class="nav--link<?php echo $is_active === 1 ? ' is-active' : '' ?>" href="besoeg-dokkx/">Besøg
        DokkX</a>
      <a class="nav--link<?php echo $is_active === 2 ? ' is-active' : '' ?>" href="dokkx.php">DokkX</a>
      <a class="nav--link<?php echo $is_active === 4 ? ' is-active' : '' ?>" href="kontakt.php">Kontakt</a>
      <a class="nav--link<?php echo $is_active === 5 ? ' is-active' : '' ?>" href="designguide.php">Design guide</a>
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
        <a href="aktivitet.php" class="nav--link<?php echo $is_active === 0 ? ' is-active' : '' ?>">Aktivitet</a>
        <a class="nav--link is-sub <?php echo $is_sub_active === 0 ? ' is-active' : '' ?>" href="sundhed-traening.php">Sundhed og træning</a>
        <a class="nav--link is-sub <?php echo $is_sub_active === 1 ? ' is-active' : '' ?>" href="teknologier.php">Teknologier</a>
        <a class="nav--link is-sub <?php echo $is_sub_active === 2 ? ' is-active' : '' ?>" href="arkiv.php">Arkiv</a>
        <a href="besoeg-dokkx/index.php" class="nav--link<?php echo $is_active === 1 ? ' is-active' : '' ?>">Besøg
          DokkX</a>
        <a class="nav--link is-sub <?php echo $is_sub_active === 0 ? ' is-active' : '' ?>" href="besoeg-dokkx/aabningstider.php">Åbningstider</a>
        <a href="nyheder.php" class="nav--link<?php echo $is_active === 2 ? ' is-active' : '' ?>">Nyheder</a>
        <a href="events.php" class="nav--link<?php echo $is_active === 3 ? ' is-active' : '' ?>">Events</a>
        <a href="kontakt.php" class="nav--link<?php echo $is_active === 4 ? ' is-active' : '' ?>">Kontakt</a>
        <a href="designguide.php" class="nav--link<?php echo $is_active === 5 ? ' is-active' : '' ?>">Design
          guide</a>
      </div>
    </div>
  </nav>
  <!--menu.html.twig END-->
