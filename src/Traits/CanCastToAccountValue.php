<?php

declare(strict_types=1);

namespace STS\Beankeep\Traits;

use STS\Beankeep\Values\Account;

trait CanCastToAccountValue
{
    use HasAccountFields;

    public function toValue(): Account
    {
        return Account::make(
            id: $this->getId(),
            accountNumber: $this->getAccountNumber(),
            type: $this->getType(),
            name: $this->getName(),
        );
    }
}
