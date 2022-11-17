<?php

declare(strict_types=1);

namespace STS\Beankeep\Traits;

use STS\Beankeep\Values\Account;

trait HasAccountAccessors
{
    use CanLookupAttribute;

    public static array $accountFieldAttributes = [
        'getId' => 'id',
        'getAccountNumber' => 'accountNumber',
        'getBaseType' => 'baseType',
        'getName' => 'name',
    ];

    // TODO(zmd): move to own trait
    public function toValue(): Account
    {
        return Account::make(
            id: $this->getId(),
            accountNumber: $this->getAccountNumber(),
            baseType: $this->getBaseType(),
            name: $this->getName(),
        );
    }

    public function getId(): string|int
    {
        return $this->lookupAttribute(__METHOD__);
    }

    public function getAccountNumber(): string
    {
        return $this->lookupAttribute(__METHOD__);
    }

    public function getBaseType(): string
    {
        return $this->lookupAttribute(__METHOD__);
    }

    public function getName(): string
    {
        return $this->lookupAttribute(__METHOD__);
    }
}
