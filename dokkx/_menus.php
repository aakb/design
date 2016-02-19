<!--html.html.twig START-->
  <!--page.html.twig START-->
<body class="<?php echo $class; ?>">
  <div class="overlay js-menu-toggle"></div>
  <a href="/dokkx" class="logo js-logo" title="DokkX">
    <?php include $path . '/images/assets/logo.svg'; ?>
  </a>
  <!--menu.html.twig START-->
  <nav class="nav js-nav">
    <div class="nav--links">
      <a class="nav--link<?php echo $is_active === 0 ? ' is-active' : '' ?>" href="/dokkx/aktiviteter/">Aktiviteter</a>
      <a class="nav--link<?php echo $is_active === 1 ? ' is-active' : '' ?>" href="/dokkx/besoeg-dokkx/">Besøg
        DokkX</a>
      <a class="nav--link<?php echo $is_active === 2 ? ' is-active' : '' ?>" href="/dokkx/om-dokkx/">Om DokkX</a>
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
          <a href="/dokkx/aktiviteter/" class="nav--link<?php echo $is_active === 0 ? ' is-active' : '' ?>">
            Aktiviteter
          </a>
          <a class="nav--link is-sub <?php echo $is_sub_active[0] === 0 ? ' is-active' : '' ?>" href="/dokkx/aktiviteter/sundhed-traening.php">
            Sundhed og træning
          </a>
          <a class="nav--link is-sub <?php echo $is_sub_active[0] === 1 ? ' is-active' : '' ?>" href="/dokkx/aktiviteter/book-rundvisning.php">
            Book en rundvisning
          </a>
          <a class="nav--link is-sub <?php echo $is_sub_active[0] === 2 ? ' is-active' : '' ?>" href="/dokkx/aktiviteter/teknologier.php">
            Teknologier
          </a>
          <a class="nav--link is-sub <?php echo $is_sub_active[0] === 3 ? ' is-active' : '' ?>" href="/dokkx/aktiviteter/arkiv.php">
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
        <div class="hamburger-menu--group<?php echo $is_group_active === 2 || isset($is_sub_active[1]) ? ' is-active' : '' ?>">
          <a href="/dokkx/om-dokkx/" class="nav--link<?php echo $is_active === 1 ? ' is-active' : '' ?>">
            Om DokkX
          </a>
        </div>
        <div class="hamburger-menu--group<?php echo $is_group_active === 3 || isset($is_sub_active[1]) ? ' is-active' : '' ?>">
          <a href="/dokkx/designguide.php" class="nav--link<?php echo $is_active === 1 ? ' is-active' : '' ?>">
            Designguide
          </a>
        </div>
      </div>
    </div>
  </nav>
  <!--menu.html.twig END-->
