<?php /* Shown until the visitor chooses. Wire the buttons to your own consent script; nothing is pre-ticked and Reject is as prominent as Accept. */ ?>
<div class="gs-cookie" role="region" aria-label="Cookies on <?= $site->title()->esc() ?>" id="cookie-banner" hidden><div class="gs-width">
  <h2>Cookies on <?= $site->title()->esc() ?></h2>
  <p>We use some essential cookies to make this site work. We would also like to set analytics cookies to help us improve it.</p>
  <button type="button" class="gs-btn" data-consent="accept">Accept analytics cookies</button>
  <button type="button" class="gs-btn" data-consent="reject">Reject analytics cookies</button>
  <a href="<?= $site->find('cookies')?->url() ?? '#' ?>">View cookies</a>
</div></div>
<script>
(function(){var b=document.getElementById('cookie-banner');try{if(!localStorage.getItem('consent'))b.hidden=false}catch(e){b.hidden=false}
b.addEventListener('click',function(e){var v=e.target.getAttribute('data-consent');if(!v)return;try{localStorage.setItem('consent',v)}catch(x){}b.hidden=true})})();
</script>
