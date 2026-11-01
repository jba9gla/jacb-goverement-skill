<header class="gs-header" role="banner"><div class="gs-width">
  <a href="<?= $site->url() ?>" class="gs-org"><?= $site->title()->esc() ?></a>
  <nav class="gs-nav" aria-label="Main"><ul>
    <?php foreach ($site->children()->listed() as $item): ?>
      <li><a href="<?= $item->url() ?>"<?= $item->isOpen() ? ' aria-current="page"' : '' ?>><?= $item->title()->esc() ?></a></li>
    <?php endforeach ?>
  </ul></nav>
</div></header>
