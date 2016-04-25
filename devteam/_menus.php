<!--html.html.twig START-->
  <!--page.html.twig START-->
<body class="<?php echo $class; ?>">
  <div class="overlay js-menu-toggle"></div>
  <a href="/devteam" class="logo js-logo" title="DevTeam">
      <!-- <img src="/devteam/images/assets/dev-team.png">-->
  </a>
  <!--menu.html.twig START-->
  <nav class="nav js-nav">
    <div class="nav--links">
      <a class="nav--link<?php echo $is_active === 0 || $is_sub_active[0] ? ' is-active' : '' ?>" href="/devteam/projekter/">Projekter</a>
      <a class="nav--link<?php echo $is_active === 1 || $is_sub_active[1] ? ' is-active' : '' ?>" href="/devteam/om-itk/">Om ITK</a>
      <a class="nav--link<?php echo $is_active === 2 || $is_sub_active[2] ? ' is-active' : '' ?>" href="/devteam/om-devteam/">Om ITK devteam</a>
      <a class="nav--link<?php echo $is_active === 3 || $is_sub_active[3] ? ' is-active' : '' ?>" href="/devteam/kontakt/">Kontakt</a>
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
          <a href="/devteam/projekter/" class="nav--link<?php echo $is_active === 0 ? ' is-active' : '' ?>">
            Projekter
          </a>
          <a class="nav--link is-sub <?php echo $is_sub_active[0] === 1 ? ' is-active' : '' ?>" href="/devteam/projekter/dokk1/">
            Dokk1
                </a>
          <a class="nav--link is-sub <?php echo $is_sub_active[0] === 2 ? ' is-active' : '' ?>" href="/devteam/projekter/aroskanalen/">
            Aroskanalen
          </a>
          <a class="nav--link is-sub <?php echo $is_sub_active[0] === 3 ? ' is-active' : '' ?>" href="/devteam/projekter/ulf/">
            ULF
          </a>
          <a class="nav--link is-sub <?php echo $is_sub_active[0] === 4 ? ' is-active' : '' ?>" href="/devteam/projekter/dbbcms-aakb/">
            DDB CMS/aakb
          </a>
          <a class="nav--link is-sub <?php echo $is_sub_active[0] === 5 ? ' is-active' : '' ?>" href="/devteam/projekter/itkore/">
            ITKore
           </a>
          <a class="nav--link is-sub <?php echo $is_sub_active[0] === 6 ? ' is-active' : '' ?>" href="/devteam/projekter/loop/">
              Loop          </a>
        </div>
        <div class="hamburger-menu--group">
          <a href="/devteam/om-itk/" class="nav--link<?php echo $is_active === 1 ? ' is-active' : '' ?>">
            Om ITK
          </a>
        </div>
        <div class="hamburger-menu--group">
          <a href="/devteam/om-devteam/" class="nav--link<?php echo $is_active === 2 ? ' is-active' : '' ?>">
            Om ITK Devteam
          </a>
        </div>
        <div class="hamburger-menu--group">
          <a href="/devteam/designguide/" class="nav--link<?php echo $is_active === 3 ? ' is-active' : '' ?>">
            Designguide
          </a>
        </div>
      </div>
    </div>
  </nav>
  <!--menu.html.twig END-->
