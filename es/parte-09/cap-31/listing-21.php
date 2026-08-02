<form action="/posts/<?= $post->id ?>/edit" method="GET">
    <button class="btn btn-success">EDIT</button>
</form>

<form action="/posts/<?= $post->id ?>/delete" method="POST">
    <button class="btn btn-danger">DELETE</button>
</form>
