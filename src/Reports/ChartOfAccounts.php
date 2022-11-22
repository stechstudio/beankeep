<?php

declare(strict_types=1);

namespace STS\Beankeep\Reports;

use STS\Beankeep\Enums\AccountType;
use STS\Beankeep\Interfaces\AccountInterface as Account;

final readonly class ChartOfAccounts
{
    /**
     * @param array<Account> $accounts
     */
    public function __construct(public array $accounts)
    {
    }

    /**
     * @param array<Account> $accounts
     */
    public static function make(array $accounts): self {
        return new self($accounts);
    }
}
