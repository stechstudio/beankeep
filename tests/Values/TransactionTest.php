<?php

declare(strict_types=1);

namespace STS\Beankeep\Tests\Values;

use STS\Beankeep\Interfaces\TransactionInterface;
use STS\Beankeep\Values\Transaction;

final class TransactionTest extends TestCase
{
    protected string $dateStr = '2021-10-10 10:10:10 -05:00';

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

    public function testGetters(): void
    {
        $transaction = new Transaction(
            id: 1,
            sourceDocument: $this->sourceDocument(),
            date: $this->date(),
        );

        $this->assertEquals(1, $transaction->getId());
        $this->assertEquals($this->sourceDocument(), $transaction->getSourceDocument());
        $this->assertEquals($this->date(), $transaction->getDate());
    }

    public function testMakeConstructorAlias(): void
    {
        $transaction = Transaction::make(
            id: 1,
            sourceDocument: $this->sourceDocument(),
            date: $this->date(),
        );

        $this->assertEquals(1, $transaction->id);
        $this->assertEquals($this->sourceDocument(), $transaction->sourceDocument);
        $this->assertEquals($this->date(), $transaction->date);
    }

    public function testIdMayBeString(): void
    {
        $transaction = Transaction::make('abc', $this->sourceDocument(), $this->date());

        $this->assertEquals('abc', $transaction->id);
    }

    public function testSatisfiesTransactionInterface(): void
    {
        $transaction = Transaction::make('abc', $this->sourceDocument(), $this->date());

        $this->assertTrue($transaction instanceOf TransactionInterface);
    }

    public function testToValueIsIdentityFunction(): void
    {
        $transaction = Transaction::make('abc', $this->sourceDocument(), $this->date());

        $this->assertTrue($transaction === $transaction->toValue());
    }
}
