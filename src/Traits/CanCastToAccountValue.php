<?php

declare(strict_types=1);

namespace STS\Beankeep\Traits;

use STS\Beankeep\Values\Account;

trait CanCastToAccountValue
{
    use HasAccountAccessors;

    public function toValue(): Account
    {
        return Account::make(
            id: $this->getId(),
            accountNumber: $this->getAccountNumber(),
            baseType: $this->getBaseType(),
            name: $this->getName(),
        );
    }
}
