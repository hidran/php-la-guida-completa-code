<?php

public function findByPostId(int $postId)
{
    $ret = [];

    $sql = 'select p.* , u.email from posts as p INNER JOIN users as u';
    $sql .= ' ON u.id=p.user_id where p.id = :id';

    $stm = $this->conn->prepare($sql);

    if ($stm) {
        $res = $stm->execute(['id' => $postId]);

        if ($res) {
            $ret = $stm->fetch();
        }
    }

    return $ret;
}
