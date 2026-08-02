<?php

declare(strict_types=1);

final class CachedPostRepository extends PostRepository
{
    public function findById(int $id): ?Post
    {
        $key = self::keyShow($id);
        $cached = $this->cache->get($key);

        if ($cached instanceof Post) {
            return $cached;
        }

        $fresh = parent::findById($id);

        if ($fresh !== null) {
            $this->cache->set($key, $fresh, self::TTL_SHOW);
        }

        return $fresh;
    }
}
