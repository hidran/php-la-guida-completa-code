<?php
public function destroy(int $id): void
{
    $stmt = $this->pdo->prepare("DELETE FROM posts WHERE id = :id");
    $stmt->execute(["id" => $id]);
}
