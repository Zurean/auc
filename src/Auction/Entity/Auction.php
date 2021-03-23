<?php

namespace App\Auction\Entity;

use App\Identify\Entity\Id;

class Auction
{
    private Id $id;

    private Product $product;

    private AuctionStatus $status;

    private Price $startPrice;

    private Price $minPrice;

    private int $fallStep;

    private int $fallInterval;

    private int $minOutbid;

    public function __construct(
        Id $id,
        Product $product,
        AuctionStatus $status,
        Price $startPrice,
        Price $minPrice,
        int $fallStep,
        int $fallInterval,
        int $minOutbid
    )
    {
        $this->id = $id;
        $this->product = $product;
        $this->status = $status;
        $this->startPrice = $startPrice;
        $this->minPrice = $minPrice;
        $this->fallStep = $fallStep;
        $this->fallInterval = $fallInterval;
        $this->minOutbid = $minOutbid;
    }


    public function getId(): Id
    {
        return $this->id;
    }

    public function getProduct(): Product
    {
        return $this->product;
    }

    public function getStatus(): AuctionStatus
    {
        return $this->status;
    }

    public function getStartPrice(): Price
    {
        return $this->startPrice;
    }

    public function getMinPrice(): Price
    {
        return $this->minPrice;
    }

    public function getFallStep(): int
    {
        return $this->fallStep;
    }

    public function getFallInterval(): int
    {
        return $this->fallInterval;
    }

    public function getMinOutbid(): int
    {
        return $this->minOutbid;
    }

    public function isFalling(): bool
    {
        return $this->status->isFalling();
    }

    public function getStartTime(): ?DateTimeImmutable
    {
        return $this->startTime;
    }
}
