<?php
  include $_SERVER['DOCUMENT_ROOT']. '/dokkx/_settings.php';

  $class = 'is-page';
  $is_sub_active[0] = 2;

  include $path . '/_header.php';
  include $path . '/_menus.php';
?>

<main role="main" class="content">
  <?php include $path . '/includes/_image.php'; ?>
  <div class="content--inner">
    <h1 class="content--header">Fællesskab</h1>
    <div class="content--lead">
      <p>[Mangler tekst]</p>
    </div>
    <div class="content--text">
      <p>
        Teknologi, der understøtter fællesskaber, kan være mange ting. Du vil blive inviteret på en virtuel cykeltur ud
        i det blå eller møde en online besøgsven. Du kan også møde de robotter, der hjælper med at holde kontakt på
        tværs af store afstande og sikrer børns deltagelse i skolens fællesskab, hvis de er langtidssygemeldte el. lign.
      </p>
    </div>
  </div>
</main>
<?php include $path . '/_footer.php'; ?>
