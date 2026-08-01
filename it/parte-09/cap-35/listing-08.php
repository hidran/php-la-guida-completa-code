<?php
public function create(): string
{
    require_login();

    return render("posts/create");
}
