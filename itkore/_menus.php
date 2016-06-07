<body class="<?php echo $class; ?>">
  <header>
    <a href="/itkore" class="logo js-logo" title="Iore">
      <?php include $path . '/images/assets/logo.svg'; ?>
    </a>



    <nav class="nav js-nav">
      <div class="nav--links">
        <a class="nav--link<?php echo $is_active === 0 ? ' is-active' : '' ?>" href="/itkore/news/">News</a>
        <a class="nav--link<?php echo $is_active === 1 ? ' is-active' : '' ?>" href="/itkore/events/">Events</a>
        <a class="nav--link<?php echo $is_active === 2 ? ' is-active' : '' ?>" href="/itkore/om-dokkx/">Om DokkX</a>
        <a class="nav--link<?php echo $is_active === 4 ? ' is-active' : '' ?>" href="/itkore/kontakt/">Kontakt</a>
      </div>
    </nav>
    <div class="nav-toggle js-menu-toggle">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="hamburger-menu--overlay js-menu-toggle">
      <nav class="hamburger-menu">
        <div class="hamburger-menu--inner">
          <div class="hamburger-menu--links">
            <div class="hamburger-menu--group<?php echo $is_group_active === 0 || isset($is_sub_active[0]) ? ' is-active' : '' ?>">
              <a href="/itkore/aktiviteter/" class="nav--link<?php echo $is_active === 0 ? ' is-active' : '' ?>">
                Aktiviteter
              </a>
              <a class="nav--link is-sub <?php echo $is_sub_active[0] === 0 ? ' is-active' : '' ?>" href="/itkore/aktiviteter/sundhed-traening.php">
                Sundhed og træning
              </a>
              <a class="nav--link is-sub <?php echo $is_sub_active[0] === 1 ? ' is-active' : '' ?>" href="/itkore/aktiviteter/book-rundvisning.php">
                Book en rundvisning
              </a>
              <a class="nav--link is-sub <?php echo $is_sub_active[0] === 2 ? ' is-active' : '' ?>" href="/itkore/aktiviteter/teknologier.php">
                Teknologier
              </a>
              <a class="nav--link is-sub <?php echo $is_sub_active[0] === 3 ? ' is-active' : '' ?>" href="/itkore/aktiviteter/arkiv.php">
                Arkiv
              </a>
            </div>
            <div class="hamburger-menu--group<?php echo $is_group_active === 1 || isset($is_sub_active[1]) ? ' is-active' : '' ?>">
              <a href="/itkore/besoeg-dokkx/" class="nav--link<?php echo $is_active === 1 ? ' is-active' : '' ?>">
                Besøg DokkX
              </a>
              <a class="nav--link is-sub <?php echo $is_sub_active[1] === 0 ? ' is-active' : '' ?>" href="/itkore/besoeg-dokkx/aabningstider.php">
                Åbningstider</a>
            </div>
            <div class="hamburger-menu--group<?php echo $is_group_active === 2 || isset($is_sub_active[1]) ? ' is-active' : '' ?>">
              <a href="/itkore/om-dokkx/" class="nav--link<?php echo $is_active === 1 ? ' is-active' : '' ?>">
                Om DokkX
              </a>
            </div>
            <div class="hamburger-menu--group<?php echo $is_group_active === 3 || isset($is_sub_active[1]) ? ' is-active' : '' ?>">
              <a href="/itkore/designguide.php" class="nav--link<?php echo $is_active === 1 ? ' is-active' : '' ?>">
                Designguide
              </a>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>