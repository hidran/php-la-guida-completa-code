<form action="/posts" method="POST">
    <div class="mb-3">
        <label for="email" class="form-label">Correo electrónico</label>
        <input required type="email" name="email" class="form-control" id="email">
    </div>
    <div class="mb-3">
        <label for="title" class="form-label">Título</label>
        <input required type="text" name="title" class="form-control" id="title">
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Mensaje</label>
        <textarea required name="message" class="form-control" id="message" rows="3"></textarea>
    </div>
    <button class="btn btn-success">GUARDAR</button>
</form>
