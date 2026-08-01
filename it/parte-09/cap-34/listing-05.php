<?php
public function store(): string
{
    $title = trim($_POST["title"] ?? "");
    $body = trim($_POST["body"] ?? "");

    if ($title === "" || $body === "") {
        return render("posts/create", [
            "errors" => ["Titolo e contenuto sono obbligatori"],
        ]);
    }

    $id = $this->posts->create($title, $body);

    header("Location: /posts/" . $id);
    exit;
}
