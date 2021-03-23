<?php

namespace App\Auction\Entity;

use DateInterval;
use Exception;

class FallInterval
{
    private DateInterval $value;

    /**
     * @param int $minutes
     *
     * @return static
     *
     * @throws Exception
     */
    public static function createMinutes(int $minutes): self
    {
        return new self(new DateInterval(sprintf('PT%dM', $minutes)));
    }

    /**
     * @param int $hours
     *
     * @return $this
     *
     * @throws Exception
     */
    public static function createHours(int $hours): self
    {
        return new self(new DateInterval(sprintf('PT%dH', $hours)));
    }

    private function __construct(DateInterval $interval)
    {
        $this->value = $interval;
    }

    public function getSeconds(): int
    {
        /**
         * @var int $seconds
         * @var int $minutes
         * @var int $minutes
         */
        $seconds = $this->value['s'];
        $minutes = $this->value['m'];
        $hours = $this->value['h'];

        if ($minutes) {
            $seconds += $minutes * 60;
        }

        if ($hours) {
            $seconds += $hours * 3600;
        }

        return $seconds;
    }

    public function getMinutes(): float
    {
        /**
         * @var int $seconds
         * @var int $minutes
         * @var int $minutes
         */
        $seconds = $this->value['s'];
        $minutes = $this->value['m'];
        $hours = $this->value['h'];

        if ($seconds) {
            $minutes += $seconds / 60;
        }

        if ($hours) {
            $minutes += $hours * 60;
        }

        return $minutes;
    }

    public function getHours(): float
    {
        /**
         * @var int $seconds
         * @var int $minutes
         * @var int $minutes
         */
        $seconds = $this->value['s'];
        $minutes = $this->value['m'];
        $hours = $this->value['h'];

        if ($seconds) {
            $hours += $seconds / 360;
        }

        if ($minutes) {
            $hours += $minutes / 60;
        }

        return $hours;
    }
}