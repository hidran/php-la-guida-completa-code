<?php
public function show(int $id): string
{
    $post = $this->posts->find($id);

    if (!$post) {
        http_response_code(404);
        return render("errors/404");
    }

    return render("posts/show", ["post" => $post]);
}
