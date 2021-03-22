<?php

namespace App\Auction\Entity;

use App\Identify\Entity\Id;

class User
{
    private Id $id;

    private string $name;

    public function __construct(Id $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }


    public function getId(): Id
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
