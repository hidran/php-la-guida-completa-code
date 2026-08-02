<?php

declare(strict_types=1);

public function show(ServerRequestInterface $request, array $args = []): ResponseInterface
{
    $post = $this->posts->findById((int) ($args['id'] ?? 0));

    if ($post === null) {
        return $this->respond($this->view->render('pages/errors/404'), 404);
    }

    return $this->respond($this->view->render('pages/posts/show', [
        'post' => $post,
        'comments' => $this->comments->allForPost($post->id),
    ]));
}
