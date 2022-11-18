<?php

declare(strict_types=1);

namespace STS\Beankeep\Traits;

use STS\Beankeep\Interfaces\IsAccount as Account;
use STS\Beankeep\Interfaces\IsTransaction as Transaction;
use UnhandledMatchError;

trait HasLineItemAccessors
{
    use CanLookupAttribute;

    /**
     * @throws UnhandledMatchError
     */
    protected static function mapBeankeepGetterToAttribute(string $getter): string
    {
        return match($getter) {
            'getId' => 'id',
            'getTransaction' => 'transaction',
            'getAccount' => 'account',
            'getDebit' => 'debit',
            'getCredit' => 'credit',
        };
    }

    public function getId(): string|int
    {
        return $this->getBeankeepAttribute(__METHOD__);
    }

    public function getTransaction(): Transaction
    {
        return $this->getBeankeepAttribute(__METHOD__);
    }

    public function getAccount(): Account
    {
        return $this->getBeankeepAttribute(__METHOD__);
    }

    public function getDebit(): int
    {
        return $this->getBeankeepAttribute(__METHOD__);
    }

    public function getCredit(): int
    {
        return $this->getBeankeepAttribute(__METHOD__);
    }
}

