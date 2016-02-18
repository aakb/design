<!--html.html.twig START-->
  <!--page.html.twig START-->
<body class="<?php echo $class; ?>">
  <div class="overlay js-menu-toggle"></div>
  <a href="/dokkx" class="logo js-logo" title="DokkX"><img src="/dokkx/images/assets/logo.svg"></a>
  <!--menu.html.twig START-->
  <nav class="nav js-nav">
    <div class="nav--links">
      <a class="nav--link<?php echo $is_active === 0 ? ' is-active' : '' ?>" href="/dokkx/aktivitet/">Aktivitet</a>
      <a class="nav--link<?php echo $is_active === 1 ? ' is-active' : '' ?>" href="/dokkx/besoeg-dokkx/">Besøg
        DokkX</a>
      <a class="nav--link<?php echo $is_active === 2 ? ' is-active' : '' ?>" href="/dokkx/dokkx/">DokkX</a>
      <a class="nav--link<?php echo $is_active === 4 ? ' is-active' : '' ?>" href="/dokkx/kontakt/">Kontakt</a>
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
        <div class="hamburger-menu--group<?php echo $is_group_active === 0 || isset($is_sub_active[0]) ? ' is-active' : '' ?>">
          <a href="/dokkx/aktivitet/" class="nav--link<?php echo $is_active === 0 ? ' is-active' : '' ?>">
            Aktivitet
          </a>
          <a class="nav--link is-sub <?php echo $is_sub_active[0] === 0 ? ' is-active' : '' ?>" href="/dokkx/aktivitet/sundhed-traening.php">
            Sundhed og træning
          </a>
          <a class="nav--link is-sub <?php echo $is_sub_active[0] === 1 ? ' is-active' : '' ?>" href="/dokkx/aktivitet/teknologier.php">
            Teknologier
          </a>
          <a class="nav--link is-sub <?php echo $is_sub_active[0] === 2 ? ' is-active' : '' ?>" href="/dokkx/aktivitet/arkiv.php">
            Arkiv
          </a>
        </div>
        <div class="hamburger-menu--group<?php echo $is_group_active === 1 || isset($is_sub_active[1]) ? ' is-active' : '' ?>">
          <a href="/dokkx/besoeg-dokkx/" class="nav--link<?php echo $is_active === 1 ? ' is-active' : '' ?>">
            Besøg DokkX
          </a>
          <a class="nav--link is-sub <?php echo $is_sub_active[1] === 0 ? ' is-active' : '' ?>" href="/dokkx/besoeg-dokkx/aabningstider.php">
            Åbningstider</a>
        </div>
        <div class="hamburger-menu--group"><a href="/dokkx/nyheder.php" class="nav--link<?php echo $is_active === 2 ?' is-active' : '' ?>">
            Nyheder
          </a></div>
        <div class="hamburger-menu--group"><a href="/dokkx/events.php" class="nav--link<?php echo $is_active === 3 ?' is-active' : '' ?>">
            Events
          </a>
        </div>
        <div class="hamburger-menu--group"><a href="/dokkx/kontakt.php" class="nav--link<?php echo $is_active === 4 ?' is-active' : '' ?>">
            Kontakt
          </a>
        </div>
        <div class="hamburger-menu--group"><a href="/dokkx/designguide.php" class="nav--link<?php echo $is_active === 5 ? ' is-active' : '' ?>">
            Designguide
          </a>
        </div>
      </div>
    </div>
  </nav>
  <!--menu.html.twig END-->
