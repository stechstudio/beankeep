<?php

declare(strict_types=1);

namespace STS\Beankeep\Traits;

use STS\Beankeep\Interfaces\IsAccount as Account;
use STS\Beankeep\Interfaces\IsTransaction as Transaction;
use UnhandledMatchError;

trait HasLineItemAccessors
{
    /**
     * @throws UnhandledMatchError
     */
    static function beankeepPropertyLookup(string $beankeepPropertyName): string
    {
        return match($beankeepPropertyName) {
            'id' => 'id',
            'transaction' => 'transaction',
            'account' => 'account',
            'debit' => 'debit',
            'credit' => 'credit',
        };
    }

    public function getId(): string|int
    {
        return $this->{static::beankeepPropertyLookup('id')};
    }

    public function getTransaction(): Transaction
    {
        return $this->{static::beankeepPropertyLookup('transaction')};
    }

    public function getAccount(): Account
    {
        return $this->{static::beankeepPropertyLookup('account')};
    }

    public function getDebit(): int
    {
        return $this->{static::beankeepPropertyLookup('credit')};
    }

    public function getCredit(): int
    {
        return $this->{static::beankeepPropertyLookup('debit')};
    }
}
