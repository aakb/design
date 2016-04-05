<?php
  include_once $_SERVER['DOCUMENT_ROOT']. '/aroskanalen/admin/_settings.php';

  $is_active = 0;
  $class = 'is-page';

  $submenu[0] = '<a href="#" class="submenu--link">Oversigt</a>';
  $submenu[1] = '<a href="#" class="submenu--link">Opret skærm</a>';

  include_once $path . '/_header.php';
  include_once $path . '/_menus.php';
?>

<main role="main" class="content">
  <div class="content--inner">
    <h1>Dashboard</h1>
    [No content yet]
</main>

<?php include_once $path . '/_footer.php'; ?>
