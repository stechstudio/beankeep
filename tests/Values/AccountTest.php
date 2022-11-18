<?php

declare(strict_types=1);

namespace STS\Beankeep\Tests\Values;

use PHPUnit\Framework\TestCase;
use STS\Beankeep\Values\Account;

final class AccountTest extends TestCase
{
    public function testMemberValues()
    {
        $account = new Account(
            id: 1,
            accountNumber: '1010',
            baseType: 'asset',
            name: 'Cash',
        );

        $this->assertEquals(1, $account->id);
        $this->assertEquals('1010', $account->accountNumber);
        $this->assertEquals('asset', $account->baseType);
        $this->assertEquals('Cash', $account->name);
    }

    // TODO(zmd): public function testMakeConstructorAlias()

    // TODO(zmd): public function testSatisfiesIsAccountInterface()

    // TODO(zmd): public function testToValueIsIdentityFunction()
}
