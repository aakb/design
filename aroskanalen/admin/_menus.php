  <div class="overlay js-menu-toggle"></div>
  <header class="header">
    <div class="header--inner">
      <a href="<?php echo $path_to_site; ?>" class="logo js-logo" title="Aroskanalen"><span>Aroskanalen</span></a>
      <nav class="nav js-nav">
          <a class="nav--link<?php echo $is_active === 0 || $is_sub_active[0] ? ' is-active' : '' ?>" href="#">
            <i class="material-icons">add_to_queue</i>Slides
          </a>
          <a class="nav--link<?php echo $is_active === 1 || $is_sub_active[1] ? ' is-active' : '' ?>" href="#">
            <i class="material-icons">dvr</i>Kanaler
          </a>
          <a class="nav--link<?php echo $is_active === 2 || $is_sub_active[2] ? ' is-active' : '' ?>" href="<?php echo $path_to_site; ?>/screen/">
            <i class="material-icons">tv</i>Skærme
          </a>
        <a class="nav--link<?php echo $is_active === 3 || $is_sub_active[3] ? ' is-active' : '' ?>" href="#">
          <i class="material-icons">picture_in_picture</i>Medier
        </a>
      </nav>
    </div>
  </header>
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
          <a class="hamburger-menu--link is-sub <?php echo $is_sub_active[0] === 1 ? ' is-active' : '' ?>" href="#">
            Oversigt
          </a>
          <a class="hamburger-menu--link is-sub <?php echo $is_sub_active[1] === 1 ? ' is-active' : '' ?>" href="#">
            Opret kanal
          </a>
        </div>
        <div class="hamburger-menu--group">
          <a href="#" class="hamburger-menu--link<?php echo $is_active === 0 ? ' is-active' : '' ?>">
            Slides
          </a>
          <a class="hamburger-menu--link is-sub <?php echo $is_sub_active[0] === 1 ? ' is-active' : '' ?>" href="#">
            Oversigt
          </a>
          <a class="hamburger-menu--link is-sub <?php echo $is_sub_active[1] === 1 ? ' is-active' : '' ?>" href="#">
            Opret kanal
          </a>
        </div>
        <div class="hamburger-menu--group">
          <a href="#" class="hamburger-menu--link<?php echo $is_active === 0 ? ' is-active' : '' ?>">
            Skærme
          </a>
          <a class="hamburger-menu--link is-sub <?php echo $is_sub_active[0] === 1 ? ' is-active' : '' ?>" href="#">
            Oversigt
          </a>
          <a class="hamburger-menu--link is-sub <?php echo $is_sub_active[1] === 1 ? ' is-active' : '' ?>" href="#">
            Opret kanal
          </a>
        </div>
        <div class="hamburger-menu--group">
          <a href="#" class="hamburger-menu--link<?php echo $is_active === 0 ? ' is-active' : '' ?>">
            Administration
          </a>
          <a class="hamburger-menu--link is-sub <?php echo $is_sub_active[0] === 1 ? ' is-active' : '' ?>" href="#">
            Deling
          </a>
          <a class="hamburger-menu--link is-sub <?php echo $is_sub_active[1] === 1 ? ' is-active' : '' ?>" href="#">
            Templates
          </a>
          <a class="hamburger-menu--link is-sub <?php echo $is_sub_active[1] === 1 ? ' is-active' : '' ?>" href="#">
            Søgning og indhold
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
