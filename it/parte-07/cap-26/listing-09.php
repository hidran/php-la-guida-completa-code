<?php
trait HasTimestamps
{
    public function touch(): void
    {
        $this->updatedAt = new DateTimeImmutable();
    }
}

class Post
{
    use HasTimestamps;
}
