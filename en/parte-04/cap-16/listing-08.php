<?php
$url = 'https://www.sitepoint.com/feed/';

$content = file_get_contents($url);
$xml = simplexml_load_string($content);
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>The SitePoint feed</title>
</head>
<body>
<section>
    <h1><?= $xml->channel->title ?></h1>
    <div class="description"><?= $xml->channel->description ?></div>

    <?php foreach ($xml->channel->item as $item): ?>
        <article>
            <h3><?= $item->title ?></h3>
            <ul>
                <li>
                    <a href="<?= $item->link ?>" target="_blank"><?= $item->link ?></a>
                </li>
                <li><?= $item->description ?></li>
            </ul>
        </article>
        <hr>
    <?php endforeach; ?>
</section>
</body>
</html>
