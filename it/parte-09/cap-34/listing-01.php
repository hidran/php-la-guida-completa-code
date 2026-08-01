<?php
public function index(): string
{
    $posts = $this->posts->all();

    return render("posts/index", ["posts" => $posts]);
}
