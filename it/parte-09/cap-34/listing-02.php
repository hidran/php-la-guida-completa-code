<?php foreach ($posts as $post): ?>
  <article>
    <h2>
      <a href="/posts/<?= (int) $post["id"] ?>">
        <?= htmlspecialchars($post["title"]) ?>
      </a>
    </h2>
  </article>
<?php endforeach; ?>
