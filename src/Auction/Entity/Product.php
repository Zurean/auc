<?php

namespace App\Auction\Entity;

use App\Identify\Entity\Id;

class Product
{
    private Id $id;

    private string $name;

    private Price $price;

    public function __construct(Id $id, string $name, Price $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getId(): Id
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): Price
    {
        return $this->price;
    }
}
