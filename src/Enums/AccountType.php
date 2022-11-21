<?php

declare(strict_types=1);

namespace STS\Beankeep\Enums;

enum AccountType: string
{
    case Asset     = 'asset';
    case Liability = 'liability';
    case Equity    = 'equity';
    case Revenue   = 'revenue';
    case Expense   = 'expense';
}
