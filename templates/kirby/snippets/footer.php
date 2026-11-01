</div></main>
<footer class="gs-footer" role="contentinfo"><div class="gs-width">
  <ul>
    <?php foreach ($site->footerlinks()->toPages() as $p): ?><li><a href="<?= $p->url() ?>"><?= $p->title()->esc() ?></a></li><?php endforeach ?>
  </ul>
  <p>&copy; <?= date('Y') ?> <?= $site->title()->esc() ?>.</p>
</div></footer>
</body></html>
