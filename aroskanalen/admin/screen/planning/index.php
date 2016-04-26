<?php
  include_once $_SERVER['DOCUMENT_ROOT']. '/aroskanalen/admin/_settings.php';

  $is_active = 3;
  $class = 'is-page';

  include_once $path . '/_header.php';
  include_once $path . '/_menus.php';
?>

<nav class="submenu">
  <div class="submenu--inner">
    <div class="submenu--links is-left">
      <a href="#" class="submenu--link">
        <i class="material-icons md-36">add</i>
        <span>Opret skærm</span>
      </a>
    </div>
    <div class="submenu--links is-right">
      <a href="<?php echo $path_to_site; ?>/screen/" class="submenu--icon-link"><i class="material-icons">apps</i></a>
      <a href="<?php echo $path_to_site; ?>/screen/planning/" class="submenu--icon-link is-active"><i class="material-icons">event_note</i></a>
    </div>
  </div>
</nav>
<main role="main" class="content">
  <div class="content--inner">
    <form class="search">
      <div class="search--input">
        <input type="search" placeholder="Søg ...">
      </div>
      <a class="search--toggle-filter"><img src="<?php echo $path_to_site; ?>/assets/icons/ic_tune_48px.svg"></a>
    </form>
  </div>
</main>

<?php include_once $path . '/_footer.php'; ?>
