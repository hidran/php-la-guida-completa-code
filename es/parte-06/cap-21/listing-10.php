<?php if (!empty($user["avatar"])): ?>
  <img src="<?= htmlspecialchars($user["avatar"], ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8") ?>" alt="">
<?php endif; ?>
