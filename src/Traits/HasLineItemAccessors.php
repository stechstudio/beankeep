<?php

declare(strict_types=1);

namespace STS\Beankeep\Traits;

use STS\Beankeep\Interfaces\IsAccount as Account;
use STS\Beankeep\Interfaces\IsTransaction as Transaction;

trait HasAccountAccessors
{
    use CanLookupAttribute;

    public static array $accountFieldAttributes = [
        'getId' => 'id',
        'getTransaction' => 'transaction',
        'getAccount' => 'account',
        'getDebit' => 'debit',
        'getCredit' => 'credit',
    ];

    public function getId(): string|int
    {
        return $this->lookupAttribute(__METHOD__);
    }

    public function getTransaction(): Transaction
    {
        return $this->lookupAttribute(__METHOD__);
    }

    public function getAccount(): Account
    {
        return $this->lookupAttribute(__METHOD__);
    }

    public function getDebit(): int
    {
        return $this->lookupAttribute(__METHOD__);
    }

    public function getCredit(): int
    {
        return $this->lookupAttribute(__METHOD__);
    }
}

