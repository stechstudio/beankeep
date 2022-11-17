<?php

declare(strict_types=1);

namespace STS\Beankeep\Traits;

use DateTimeImmutable;
use STS\Beankeep\Interfaces\IsAccount as Account;
use STS\Beankeep\Interfaces\IsTransaction as Transaction;

trait HasAccountAccessors
{
    use CanLookupAttribute;

    public static array $accountFieldAttributes = [
        'getId' => 'id',
        'getDate' => 'date',
        'getMemo' => 'memo',
        'getAttachment' => 'attachment',
    ];

    public function getId(): string|int
    {
        return $this->lookupAttribute(__METHOD__);
    }

    public function getDate(): DateTimeImmutable
    {
        return $this->lookupAttribute(__METHOD__);
    }

    public function getMemo(): string
    {
        return $this->lookupAttribute(__METHOD__);
    }

    public function getAttachment(): string
    {
        return $this->lookupAttribute(__METHOD__);
    }
}
