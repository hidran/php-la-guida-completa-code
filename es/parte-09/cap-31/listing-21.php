<form action="/posts/<?= $post->id ?>/edit" method="GET">
    <button class="btn btn-success">EDITAR</button>
</form>

<form action="/posts/<?= $post->id ?>/delete" method="POST">
    <button class="btn btn-danger">ELIMINAR</button>
</form>
