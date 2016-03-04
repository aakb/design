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
      <a class="nav--link<?php echo $is_active === 0 || $is_sub_active[0] ? ' is-active' : '' ?>" href="/dokkx/aktiviteter/">Aktiviteter</a>
      <a class="nav--link<?php echo $is_active === 1 || $is_sub_active[1] ? ' is-active' : '' ?>" href="/dokkx/nyheder/">Nyheder</a>
      <a class="nav--link<?php echo $is_active === 2 || $is_sub_active[2] ? ' is-active' : '' ?>" href="/dokkx/besoeg-dokkx/">Besøg
        DokkX</a>
      <a class="nav--link<?php echo $is_active === 3 || $is_sub_active[3] ? ' is-active' : '' ?>" href="/dokkx/om-dokkx/">Om DokkX</a>
      <a class="nav--link<?php echo $is_active === 4 || $is_sub_active[4] ? ' is-active' : '' ?>" href="/dokkx/kontakt/">Kontakt</a>
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
        <div class="hamburger-menu--group">
          <a href="/dokkx/aktiviteter/" class="nav--link<?php echo $is_active === 0 ? ' is-active' : '' ?>">
            Aktiviteter
          </a>
          <a class="nav--link is-sub <?php echo $is_sub_active[0] === 1 ? ' is-active' : '' ?>" href="/dokkx/aktiviteter/sundhed-traening/">
            Sundhed og træning
          </a>
          <a class="nav--link is-sub <?php echo $is_sub_active[0] === 2 ? ' is-active' : '' ?>" href="/dokkx/aktiviteter/faellesskab/">
            Fællesskab
          </a>
          <a class="nav--link is-sub <?php echo $is_sub_active[0] === 3 ? ' is-active' : '' ?>" href="/dokkx/aktiviteter/teknologier/">
            Teknologier
          </a>
          <a class="nav--link is-sub <?php echo $is_sub_active[0] === 4 ? ' is-active' : '' ?>" href="/dokkx/aktiviteter/arkiv/">
            Arkiv
          </a>
        </div>
        <div class="hamburger-menu--group">
          <a href="/dokkx/besoeg-dokkx/" class="nav--link<?php echo $is_active === 1 ? ' is-active' : '' ?>">
            Besøg DokkX
          </a>
          <a class="nav--link is-sub <?php echo $is_sub_active[1] === 1 ? ' is-active' : '' ?>" href="/dokkx/besoeg-dokkx/aabningstider/">
            Åbningstider
          </a>
          <a class="nav--link is-sub <?php echo $is_sub_active[1] === 2 ? ' is-active' : '' ?>" href="/dokkx/besoeg-dokkx/book-rundvisning/">
            Book en rundvisning
          </a>
        </div>
        <div class="hamburger-menu--group">
          <a href="/dokkx/om-dokkx/" class="nav--link<?php echo $is_active === 2 ? ' is-active' : '' ?>">
            Om DokkX
          </a>
          <a class="nav--link is-sub <?php echo $is_sub_active[2] === 1 ? ' is-active' : '' ?>" href="/dokkx/om-dokkx/frihed-til-mere-til-flere/">
            Frihed til mere til flere
          </a>
          <a class="nav--link is-sub <?php echo $is_sub_active[2] === 2 ? ' is-active' : '' ?>" href="/dokkx/om-dokkx/rum-for-gentaenkning/">
            Rum for gentænking
          </a>
          <a class="nav--link is-sub <?php echo $is_sub_active[2] === 3 ? ' is-active' : '' ?>" href="/dokkx/om-dokkx/centrum-for-velfaerds-og-frihedsteknologi/">
            Centrum for velfærds- og Frihedsteknologi
          </a>
        </div>
        <div class="hamburger-menu--group">
          <a href="/dokkx/designguide/" class="nav--link<?php echo $is_active === 3 ? ' is-active' : '' ?>">
            Designguide
          </a>
        </div>
      </div>
    </div>
  </nav>
  <!--menu.html.twig END-->
