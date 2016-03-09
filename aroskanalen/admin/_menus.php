<body class="<?php echo $class; ?>">
  <div class="overlay js-menu-toggle"></div>
  <a href="<?php echo $path_to_site; ?>" class="logo js-logo" title="Aroskanalen">
    Aroskanalen
  </a>

  <header class="header" role="banner">
    <div class="header--main-anonymous">
      <div class="header--logo-anonymous">
        Ik3 Dev
      </div>
    </div>
  </header>

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
  <div class="nav-toggle js-menu-toggle">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
  <nav class="hamburger-menu">
    <div class="hamburger-menu--inner">
      <div class="hamburger-menu--links">
        <div class="hamburger-menu--group">
          <a href="#" class="nav--link<?php echo $is_active === 0 ? ' is-active' : '' ?>">
            Kanaler
          </a>
        </div>
        <div class="hamburger-menu--group">
          <a href="#" class="nav--link<?php echo $is_active === 0 ? ' is-active' : '' ?>">
            Slides
          </a>
        </div>
        <div class="hamburger-menu--group">
          <a href="#" class="nav--link<?php echo $is_active === 0 ? ' is-active' : '' ?>">
            Skærme
          </a>
        </div>
        <div class="hamburger-menu--group">
          <a href="#" class="nav--link<?php echo $is_active === 0 ? ' is-active' : '' ?>">
            Designguide
          </a>
        </div>
      </div>
    </div>
  </nav>
