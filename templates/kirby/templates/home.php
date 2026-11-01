<?php snippet('head') ?>
<main id="main" class="gs-main"><div class="gs-width">
  <div class="gs-row"><div class="gs-two-thirds">
    <h1><?= $page->title()->esc() ?></h1>
    <p class="gs-lead"><?= $page->lead()->esc() ?></p>
    <?php if ($page->startlink()->isNotEmpty()): ?>
      <a href="<?= $page->startlink()->toUrl() ?>" class="gs-btn gs-btn--start" role="button" draggable="false"><?= $page->startlabel()->or('Start now')->esc() ?></a>
    <?php endif ?>
    <ul class="gs-cards">
      <?php foreach ($page->cards()->toStructure() as $c): ?>
        <li><h3><a href="<?= $c->link()->toUrl() ?>"><?= $c->title()->esc() ?></a></h3><p><?= $c->summary()->esc() ?></p></li>
      <?php endforeach ?>
    </ul>
  </div></div>
<?php snippet('footer') ?>
