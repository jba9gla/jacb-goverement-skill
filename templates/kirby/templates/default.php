<?php snippet('head') ?>
<main id="main" class="gs-main"><div class="gs-width">
  <div class="gs-row"><div class="gs-two-thirds">
    <h1><?= $page->title()->esc() ?></h1>
    <?php if ($page->lead()->isNotEmpty()): ?><p class="gs-lead"><?= $page->lead()->esc() ?></p><?php endif ?>
    <?= $page->text()->kt() ?>
  </div></div>
<?php snippet('footer') ?>
