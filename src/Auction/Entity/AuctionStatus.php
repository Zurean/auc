<?php

namespace App\Auction\Entity;

class AuctionStatus
{
    /**
     * @var string
     */
    private const STATUS_CREATED = 'created';

    /**
     * @var string
     */
    private const STATUS_FALLING = 'falling';

    /**
     * @var string
     */
    private const STATUS_PAUSED = 'paused';

    /**
     * @var string
     */
    private const STATUS_TRADING = 'trading';

    /**
     * @var string
     */
    private const STATUS_CLOSED = 'closed';

    private string $value;

    public function getValue(): string
    {
        return $this->value;
    }

    private function __construct(string $value)
    {
        $this->value = self::STATUS_CREATED;
    }

    public static function create(): self
    {
        return new self(self::STATUS_CREATED);
    }

    public function setFalling(): void
    {
        $this->value = self::STATUS_FALLING;
    }

    public function setTrading(): void
    {
        $this->value = self::STATUS_TRADING;
    }

    public function setClosed(): void
    {
        $this->value = self::STATUS_CLOSED;
    }

    public function setPaused(): void
    {
        $this->value = self::STATUS_PAUSED;
    }
}

