<?php

declare(strict_types=1);

namespace STS\Beankeep\Tests\Values;

use STS\Beankeep\Interfaces\IsLineItem;
use STS\Beankeep\Values\LineItem;

final class LineItemTest extends TestCase
{
    public function testMemberValues(): void
    {
        $lineItem = new LineItem(
            id: 1,
            transaction: $this->transaction(),
            account: $this->account(),
            debit: 10000,
            credit: 0,
        );

        $this->assertEquals(1, $lineItem->id);
        $this->assertEquals($this->transaction(), $lineItem->transaction);
        $this->assertEquals($this->account(), $lineItem->account);
        $this->assertEquals(10000, $lineItem->debit);
        $this->assertEquals(0, $lineItem->credit);
    }

    public function testGetters(): void
    {
        $lineItem = new LineItem(
            id: 1,
            transaction: $this->transaction(),
            account: $this->account(),
            debit: 10000,
            credit: 0,
        );

        $this->assertEquals(1, $lineItem->getId());
        $this->assertEquals($this->transaction(), $lineItem->getTransaction());
        $this->assertEquals($this->account(), $lineItem->getAccount());
        $this->assertEquals(10000, $lineItem->getDebit());
        $this->assertEquals(0, $lineItem->getCredit());
    }

    public function testMakeConstructorAlias(): void
    {
        $lineItem = LineItem::make(
            id: 1,
            transaction: $this->transaction(),
            account: $this->account(),
            debit: 10000,
            credit: 0,
        );

        $this->assertEquals(1, $lineItem->id);
        $this->assertEquals($this->transaction(), $lineItem->transaction);
        $this->assertEquals($this->account(), $lineItem->account);
        $this->assertEquals(10000, $lineItem->debit);
        $this->assertEquals(0, $lineItem->credit);
    }

    public function testIdMayBeString(): void
    {
        $lineItem = LineItem::make(
            id: 'abc',
            transaction: $this->transaction(),
            account: $this->account(),
            debit: 10000,
            credit: 0,
        );

        $this->assertEquals('abc', $lineItem->id);
    }

    public function testSatisfiesIsLineItemInterface(): void
    {
        $lineItem = LineItem::make(
            id: 1,
            transaction: $this->transaction(),
            account: $this->account(),
            debit: 10000,
            credit: 0,
        );

        $this->assertTrue($lineItem instanceOf IsLineItem);
    }

    public function testToValueIsIdentityFunction(): void
    {
        $lineItem = LineItem::make(
            id: 1,
            transaction: $this->transaction(),
            account: $this->account(),
            debit: 10000,
            credit: 0,
        );

        $this->assertTrue($lineItem === $lineItem->toValue());
    }
}
