<?php

declare(strict_types=1);

namespace STS\Beankeep\Traits;

use STS\Beankeep\Values\LineItem;

trait CanCastToLineItemValue
{
    use HasLineItemAccessors;

    public function toValue(): LineItem
    {
        return LineItem::make(
            id: $this->getId(),
            transaction: $this->getTransaction()->toValue(),
            account: $this->getAccount()->toValue(),
            debit: $this->getDebit(),
            credit: $this->getCredit(),
        );
    }
}
