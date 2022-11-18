<?php

declare(strict_types=1);

namespace STS\Beankeep\Tests\Values;

use DateTimeImmutable;
use STS\Beankeep\Interfaces\IsTransaction;
use STS\Beankeep\Values\SourceDocument;
use STS\Beankeep\Values\Transaction;

final class TransactionTest extends TestCase
{
    protected string $dateStr = '2021-10-10 10:10:10 -05:00';

    protected SourceDocument $sourceDocument;

    protected function sourceDocument(): SourceDocument
    {
        return $this->sourceDocument ??= SourceDocument::make(
            id: 1,
            date: $this->date('2021-09-09 05:00:00 -08:00'),
            memo: 'Reticulate the splines',
            attachment: '2021-09-09-splines-r-us--reticulating-service-invoice.pdf',
        );
    }

    public function testMemberValues(): void
    {
        $transaction = new Transaction(
            id: 1,
            sourceDocument: $this->sourceDocument(),
            date: $this->date(),
        );

        $this->assertEquals(1, $transaction->id);
        $this->assertEquals($this->sourceDocument(), $transaction->sourceDocument);
        $this->assertEquals($this->date(), $transaction->date);
    }
}
