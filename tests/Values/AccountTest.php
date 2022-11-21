<?php

declare(strict_types=1);

namespace STS\Beankeep\Tests\Values;

use STS\Beankeep\Enums\AccountType;
use STS\Beankeep\Interfaces\AccountInterface;
use STS\Beankeep\Values\Account;

final class AccountTest extends TestCase
{
    public function testMemberValues(): void
    {
        $account = new Account(
            id: 1,
            accountNumber: '1010',
            baseType: AccountType::Asset,
            name: 'Cash',
        );

        $this->assertEquals(1, $account->id);
        $this->assertEquals('1010', $account->accountNumber);
        $this->assertEquals(AccountType::Asset, $account->baseType);
        $this->assertEquals('Cash', $account->name);
    }

    public function testGetters(): void
    {
        $account = new Account(
            id: 1,
            accountNumber: '1010',
            baseType: AccountType::Asset,
            name: 'Cash',
        );

        $this->assertEquals(1, $account->getId());
        $this->assertEquals('1010', $account->getAccountNumber());
        $this->assertEquals(AccountType::Asset, $account->getBaseType());
        $this->assertEquals('Cash', $account->getName());
    }

    public function testMakeConstructorAlias(): void
    {
        $account = Account::make(
            id: 1,
            accountNumber: '1010',
            baseType: AccountType::Asset,
            name: 'Cash',
        );

        $this->assertEquals(1, $account->id);
        $this->assertEquals('1010', $account->accountNumber);
        $this->assertEquals(AccountType::Asset, $account->baseType);
        $this->assertEquals('Cash', $account->name);
    }

    public function testIdMayBeString(): void
    {
        $account = new Account('abc', '1010', AccountType::Asset, 'Cash');

        $this->assertEquals('abc', $account->id);
    }

    public function testSatisfiesAccountInterface(): void
    {
        $account = new Account(1, '1010', AccountType::Asset, 'Cash');

        $this->assertTrue($account instanceOf AccountInterface);
    }

    public function testToValueIsIdentityFunction(): void
    {
        $account = new Account(1, '1010', AccountType::Asset, 'Cash');

        $this->assertTrue($account === $account->toValue());
    }
}
