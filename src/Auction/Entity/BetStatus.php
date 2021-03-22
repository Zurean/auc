<?php

namespace App\Auction\Entity;

class BetStatus
{
    /**
     * @var string
     */
    private const STATUS_PLAYING = 'playing';

    /**
     * @var string
     */
    private const STATUS_WINNING = 'winning';

    /**
     * @var string
     */
    private const STATUS_WON = 'won';

    /**
     * @var string
     */
    private const STATUS_LOSING = 'losing';

    /**
     * @var string
     */
    private const STATUS_LOST = 'lost';

    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function create(): self
    {
        return new self(self::STATUS_PLAYING);
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setWinning(): void
    {
        $this->value  = self::STATUS_WINNING;
    }

    public function setWon(): void
    {
        $this->value  = self::STATUS_WON;
    }

    public function setLosing(): void
    {
        $this->value  = self::STATUS_LOSING;
    }

    public function setLost(): void
    {
        $this->value  = self::STATUS_LOST;
    }
}
