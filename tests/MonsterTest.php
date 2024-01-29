<?php

namespace App\Tests;

// tests/MonsterTest.php

use App\Entity\Monster;
use PHPUnit\Framework\TestCase;

class MonsterTest extends TestCase
{
    public function testSetName(): void
    {
        $monster = new Monster();
        $monster->setName('TestMonster');
        $this->assertEquals('TestMonster', $monster->getName());
    }

    public function testSetPv(): void
    {
        $monster = new Monster();
        $monster->setPv(100);
        $this->assertEquals(100, $monster->getPv());
    }

    public function testSetLevel(): void
    {
        $monster = new Monster();
        $monster->setLevel(10);
        $this->assertEquals(10, $monster->getLevel());
    }

    public function testGetId(): void
    {
        $monster = new Monster();
        $this->assertEquals(0, $monster->getId());
    }
}
