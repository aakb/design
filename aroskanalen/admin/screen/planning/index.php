<?php
  include_once $_SERVER['DOCUMENT_ROOT']. '/aroskanalen/admin/_settings.php';

  $is_active = 3;
  $class = 'is-page';

  $submenu[0] = '<a href="#" class="submenu--link">Opret skærm</a>';
  $submenu[1] = '<a href="' . $path_to_site . '/screen/" class="is-aligned-right">Oversigt</a>';
  $submenu[2] = '<a href="' . $path_to_site . '/screen/planning/">Planlægning</a>';

  include_once $path . '/_header.php';
  include_once $path . '/_menus.php';
?>

<main role="main" class="content">
  <div class="content--inner">
    <h1><a href="<?php echo $path_to_site; ?>/screen/">Skærme</a> / Planlægning</h1>
    <input type="search" placeholder="Søg...">

  </div>
</main>

<?php include_once $path . '/_footer.php'; ?>
