<?php

namespace App\Auction\UseCase\CalcAuctionPrice;

use App\Auction\Entity\Price;
use App\Auction\Repository\Auction;
use DomainException;
use DateTimeImmutable;

class Handler
{
    private Auction $repository;

    public function __invoke(Command $command): Price
    {

        $auction = $this->repository->find($command->id);

        if (is_null($auction)) {
            throw new DomainException('Auction not found');
        }

        if (!$auction->isFalling()) {
            throw new DomainException('Auction isn\'t in falling status');
        }

        $now = new DateTimeImmutable();
        $startTime = $auction->getStartTime();

        $timeFromStart = $now->diff($startTime);

        $startPrice = $auction->getStartPrice();
        $productPrice = $auction->getProduct()->getPrice();
//        $fallingStepsCount =

//        $currentPrice = $startPrice - ();
    }
}