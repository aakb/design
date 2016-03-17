<body class="<?php echo $class; ?>">
  <div class="overlay js-menu-toggle"></div>
  <header class="header">
    <div class="header--inner">
      <a href="<?php echo $path_to_site; ?>" class="logo js-logo" title="Aroskanalen"><span>Aroskanalen</span></a>
      <nav class="nav js-nav">
          <a class="nav--link<?php echo $is_active === 0 || $is_sub_active[0] ? ' is-active' : '' ?>" href="#">
            Slides
          </a>
          <a class="nav--link<?php echo $is_active === 1 || $is_sub_active[1] ? ' is-active' : '' ?>" href="#">
            Kanaler
          </a>
          <a class="nav--link<?php echo $is_active === 2 || $is_sub_active[2] ? ' is-active' : '' ?>" href="#">
            Skærme
          </a>
        <a class="nav--link<?php echo $is_active === 3 || $is_sub_active[3] ? ' is-active' : '' ?>" href="#">
          Medier
        </a>
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
              <a href="#" class="hamburger-menu--link<?php echo $is_active === 0 ? ' is-active' : '' ?>">
                Kanaler
              </a>
            </div>
            <div class="hamburger-menu--group">
              <a href="#" class="hamburger-menu--link<?php echo $is_active === 0 ? ' is-active' : '' ?>">
                Slides
              </a>
            </div>
            <div class="hamburger-menu--group">
              <a href="#" class="hamburger-menu--link<?php echo $is_active === 0 ? ' is-active' : '' ?>">
                Skærme
              </a>
            </div>
            <div class="hamburger-menu--group">
              <a href="/aroskanalen/style-guide" class="hamburger-menu--link<?php echo $is_active === 0 ? ' is-active' : '' ?>">
                Style guide
              </a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
