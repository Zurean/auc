<?php

namespace App\Auction\Entity;

use App\Identify\Entity\Id;

class Bet
{
    private Id $id;

    private User $user;

    private Auction $auction;

    private Price $value;

    private BetStatus $status;

    public function __construct(
        Id $id,
        User $user,
        Auction $auction,
        Price $value,
        BetStatus $status
    )
    {
        $this->id = $id;
        $this->user = $user;
        $this->auction = $auction;
        $this->value = $value;
        $this->status = $status;
    }

    public function getId(): Id
    {
        return $this->id;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function getAuction(): Auction
    {
        return $this->auction;
    }

    public function getValue(): Price
    {
        return $this->value;
    }

    public function getStatus(): BetStatus
    {
        return $this->status;
    }
}

