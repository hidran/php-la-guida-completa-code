<?php
class Car
{
    public int $speed = 0;

    public function accelerate(int $increment): void
    {
        $this->speed += $increment;
    }
}

$car = new Car();
$car->accelerate(20);
