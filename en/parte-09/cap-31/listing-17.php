<?php foreach ($posts as $post): ?>
    <article>
        <h2>
            <a href="/posts/<?= $post->id ?>">
                <?= htmlentities($post->title) ?>
            </a>
        </h2>
        <p>
            <time datetime="<?= $post->datecreated ?>"><?= $post->datecreated ?></time>
            by <a href="mailto:<?= $post->email ?>"><?= htmlentities($post->email) ?></a>
        </p>
        <?= nl2br(htmlentities($post->message)) ?>
    </article>
<?php endforeach; ?>
