<form action="/posts/<?= $post->id ?>/edit" method="GET">
    <button class="btn btn-success">MODIFICA</button>
</form>

<form action="/posts/<?= $post->id ?>/delete" method="POST">
    <button class="btn btn-danger">ELIMINA</button>
</form>
