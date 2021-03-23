<?php

namespace App\Auction\Test\Unit;

use PHPUnit\Framework\TestCase;
use App\Auction\Entity\FallInterval;
use Exception;

/**
 * @covers FallInterval
*/
class FallIntervalTest extends TestCase
{
    public function testMinutesSuccess(): void
    {
        $interval = FallInterval::createMinutes($minutes = 23);

        self::assertEquals($minutes, $interval->getMinutes());
    }

    public function testMinutesException(): void
    {
        FallInterval::createMinutes($minutes = 'abc');

        $this->expectException(Exception::class);
    }

    public function testHoursSuccess(): void
    {
        $interval = FallInterval::createHours($minutes = 2);

        self::assertEquals($minutes, $interval->getMinutes());
    }

    public function testHoursException(): void
    {
        FallInterval::createHours($minutes = 'abc');

        $this->expectException(Exception::class);
    }

    public function testGetSeconds(): void
    {
        $interval = FallInterval::createMinutes($minutes = 23);
        self::assertEquals($minutes * 60, $interval->getSeconds());

        $interval = FallInterval::createHours($hours = 2);
        self::assertEquals($hours * 360, $interval->getSeconds());
    }
}