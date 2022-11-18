<?php

declare(strict_types=1);

namespace STS\Beankeep\Tests\Values;

use PHPUnit\Framework\TestCase as BaseTestCase;
use DateTimeImmutable;
use STS\Beankeep\Values\Account;
use STS\Beankeep\Values\SourceDocument;
use STS\Beankeep\Values\Transaction;

class TestCase extends BaseTestCase
{
    protected string $dateStr = '1970-01-01 00:00:00 -05:00';

    protected Account $account;

    protected SourceDocument $sourceDocument;

    protected Transaction $transaction;

    protected function date(?string $dateStr=null): DateTimeImmutable
    {
        return new DateTimeImmutable($dateStr ?? $this->dateStr);
    }

    protected function account(): Account
    {
        return $this->account ??= Account::make(
            id: 1,
            accountNumber: '1010',
            baseType: 'asset',
            name: 'Cash',
        );
    }

    protected function sourceDocument(): SourceDocument
    {
        return $this->sourceDocument ??= SourceDocument::make(
            id: 1,
            date: $this->date('2021-09-09 05:00:00 -08:00'),
            memo: 'Reticulate the splines',
            attachment: '2021-09-09-splines-r-us--reticulating-service-invoice.pdf',
        );
    }

    protected function transaction(): Transaction
    {
        return $this->transaction ??= Transaction::make(
            id: 1,
            sourceDocument: $this->sourceDocument(),
            date: $this->date('2021-10-10 10:10:10 -05:00'),
        );
    }
}
