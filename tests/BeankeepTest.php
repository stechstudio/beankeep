<?php

declare(strict_types=1);

namespace STS\Beankeep\Tests;

use PHPUnit\Framework\TestCase;
use STS\Beankeep\Beankeep;

final class BeankeepTest extends TestCase
{
    public function testTruth()
    {
        $this->assertTrue(Beankeep::truth());
    }

    public function testFalsehood()
    {
        $this->assertFalse(Beankeep::error());
    }
}

