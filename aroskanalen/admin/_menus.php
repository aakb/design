<body class="<?php echo $class; ?>">
  <header class="header">
    <div class="header--inner">
      <a href="<?php echo $path_to_site; ?>" class="logo js-logo" title="Aroskanalen"><i class="material-icons">filter_none</i><span>Aroskanalen</span></a>
      <nav class="nav js-nav">
          <a class="nav--link<?php echo $is_active === 0 || $is_sub_active[0] ? ' is-active' : '' ?>" href="<?php echo $path_to_site; ?>/dashboard/">
            <i class="material-icons">home</i>Start
          </a>
          <a class="nav--link<?php echo $is_active === 1 || $is_sub_active[1] ? ' is-active' : '' ?>" href="#">
            <i class="material-icons">add_to_queue</i>Slides
          </a>
          <a class="nav--link<?php echo $is_active === 2 || $is_sub_active[2] ? ' is-active' : '' ?>" href="#">
            <i class="material-icons">dvr</i>Kanaler
          </a>
          <a class="nav--link<?php echo $is_active === 3 || $is_sub_active[3] ? ' is-active' : '' ?>" href="<?php echo $path_to_site; ?>/screen/">
            <i class="material-icons">tv</i>Skærme
          </a>
        <a class="nav--link<?php echo $is_active === 4 || $is_sub_active[4] ? ' is-active' : '' ?>" href="#">
          <i class="material-icons">picture_in_picture</i>Medier
        </a>
      </nav>
    </div>
    <nav class="submenu">
      <div class="submenu--inner">
        <?php echo $submenu[0]; ?>
        <?php echo $submenu[1]; ?>
        <?php echo $submenu[2]; ?>
        <?php echo $submenu[3]; ?>
      </div>
    </nav>
  </header>
  <div class="nav-toggle js-toggle-modal">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
  <div class="hamburger-menu--overlay js-toggle-modal js-modal is-hidden">
    <nav class="hamburger-menu js-modal-dialog is-hidden">
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
  </div>
