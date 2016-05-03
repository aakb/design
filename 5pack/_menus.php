<!--html.html.twig START-->
  <!--page.html.twig START-->
<body class="<?php echo $class; ?>">
  <div class="overlay js-menu-toggle"></div>
  <a href="<?php echo $path_to_site; ?>/" class="logo js-logo" title=""></a>
  <!--menu.html.twig START-->
  <nav class="nav js-nav">
    <div class="nav--links">
      <a class="nav--link<?php echo $is_active === 0 || $is_sub_active[0] ? ' is-active' : '' ?>" href="<?php echo $path_to_site; ?>/om-5-pack/">Om 5 pack</a>
      <a class="nav--link<?php echo $is_active === 1 || $is_sub_active[1] ? ' is-active' : '' ?>" href="<?php echo $path_to_site; ?>/nyheder/">Nyheder</a>
      <a class="nav--link<?php echo $is_active === 2 || $is_sub_active[2] ? ' is-active' : '' ?>" href="<?php echo $path_to_site; ?>/temaer/">Temaer</a>
      <a class="nav--link<?php echo $is_active === 3 || $is_sub_active[3] ? ' is-active' : '' ?>" href="<?php echo $path_to_site; ?>/netvaerk/">Netværk</a>
      <a class="nav--link<?php echo $is_active === 4 || $is_sub_active[4] ? ' is-active' : '' ?>" href="<?php echo $path_to_site; ?>/kontakt/">Kontakt</a>
      <a class="nav--link<?php echo $is_active === 5 || $is_sub_active[5] ? ' is-active' : '' ?>" href="<?php echo $path_to_site; ?>/english/">English</a>
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
          <a href="<?php echo $path_to_site; ?>/om-5-pack/" class="hamburger-menu--link<?php echo $is_active === 0 ? ' is-active' : '' ?>">
            Om 5 pack
          </a>
        </div>
        <div class="hamburger-menu--group">
          <a href="<?php echo $path_to_site; ?>/nyheder/" class="hamburger-menu--link<?php echo $is_active === 1 ? ' is-active' : '' ?>">
            Nyheder
          </a>
        </div>
        <div class="hamburger-menu--group">
          <a href="<?php echo $path_to_site; ?>/temaer/" class="hamburger-menu--link<?php echo $is_active === 2 ? ' is-active' : '' ?>">
            Temaer
          </a>
          <a class="hamburger-menu--link is-sub <?php echo $is_sub_active[2] === 1 ? ' is-active' : '' ?>" href="<?php echo $path_to_site; ?>/temaer/den-digitale-infrastruktur/">
            Den digtiale infrastruktur
          </a>
          <a class="hamburger-menu--link is-sub <?php echo $is_sub_active[2] === 2 ? ' is-active' : '' ?>" href="<?php echo $path_to_site; ?>/temaer/open-data/">
            Open Data
          </a>
          <a class="hamburger-menu--link is-sub <?php echo $is_sub_active[2] === 3 ? ' is-active' : '' ?>" href="<?php echo $path_to_site; ?>/temaer/mobilitet/">
            Mobilitet
          </a>
          <a class="hamburger-menu--link is-sub <?php echo $is_sub_active[2] === 4 ? ' is-active' : '' ?>" href="<?php echo $path_to_site; ?>/temaer/forsyning/">
            Forsyning
          </a>
          <a class="hamburger-menu--link is-sub <?php echo $is_sub_active[2] === 5 ? ' is-active' : '' ?>" href="<?php echo $path_to_site; ?>/temaer/mennesker/">
            Mennesker
           </a>
          <a class="hamburger-menu--link is-sub <?php echo $is_sub_active[2] === 6 ? ' is-active' : '' ?>" href="<?php echo $path_to_site; ?>/temaer/living-labs/">
            Living Labs
          </a>
        </div>
        <div class="hamburger-menu--group">
          <a href="<?php echo $path_to_site; ?>/netvaerk/" class="hamburger-menu--link<?php echo $is_active === 3 ? ' is-active' : '' ?>">
            Netværk
          </a>
        </div>
        <div class="hamburger-menu--group">
          <a href="<?php echo $path_to_site; ?>/kontakt/" class="hamburger-menu--link<?php echo $is_active === 4 ? ' is-active' : '' ?>">
            Kontakt
          </a>
        </div>
        <div class="hamburger-menu--group">
          <a href="<?php echo $path_to_site; ?>/english/" class="hamburger-menu--link<?php echo $is_active === 5 ? ' is-active' : '' ?>">
            English
          </a>
        </div>
      </div>
    </div>
  </nav>
  <!--menu.html.twig END-->
