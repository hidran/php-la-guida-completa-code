<form action="/posts" method="POST">
    <div class="mb-3">
        <label for="email" class="form-label">Indirizzo email</label>
        <input required type="email" name="email" class="form-control" id="email">
    </div>
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input required type="text" name="title" class="form-control" id="title">
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Messaggio</label>
        <textarea required name="message" class="form-control" id="message" rows="3"></textarea>
    </div>
    <button class="btn btn-success">SALVA</button>
</form>
