<?php
public function store(): string
{
    $title = trim($_POST["title"] ?? "");
    $body = trim($_POST["body"] ?? "");

    if ($title === "" || $body === "") {
        return render("posts/create", [
            "errors" => ["Title and content are required"],
        ]);
    }

    $id = $this->posts->create($title, $body);

    header("Location: /posts/" . $id);
    exit;
}
