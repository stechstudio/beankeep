<?php

declare(strict_types=1);

namespace STS\Beankeep\Tests\Values;

use PHPUnit\Framework\TestCase as BaseTestCase;
use DateTimeImmutable;

class TestCase extends BaseTestCase
{
    protected string $dateStr = '1970-01-01 00:00:00 -05:00';

    protected function date(?string $dateStr=null): DateTimeImmutable
    {
        return new DateTimeImmutable($dateStr ?? $this->dateStr);
    }
}
