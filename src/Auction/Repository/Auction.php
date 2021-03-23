<?php

namespace App\Auction\Repository;

use App\Auction\Entity;

interface Auction
{
    public function find(string $id): ? Entity\Auction;
}