<body class="<?php echo $class; ?>">
  <div class="overlay js-menu-toggle"></div>
  <a href="<?php echo $path_to_site; ?>/" class="logo js-logo" title=""><span class="logo--text">Site navn</span></a>
  <!--menu.html.twig START-->
  <nav class="nav js-nav">
    <div class="nav--links">
      <a class="nav--link<?php echo $is_active === 1 || $is_sub_active[1] ? ' is-active' : '' ?>" href="<?php echo $path_to_site; ?>/kom-igang/">Kom igang</a>
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
          <a href="<?php echo $path_to_site; ?>/kom-igang/" class="nav--link<?php echo $is_active === 1 ? ' is-active' : '' ?>">
            Kom igang
          </a>
          <a href="<?php echo $path_to_site; ?>/kom-igang/opret-side/" class="nav--link is-sub <?php echo $is_sub_active[1] === 1 ? ' is-active' : '' ?>">
            Vejledning: Opret side
          </a>
        </div>
      </div>
    </div>
  </nav>
  <!--menu.html.twig END-->
