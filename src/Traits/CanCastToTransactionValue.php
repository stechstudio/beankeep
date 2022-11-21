<?php

declare(strict_types=1);

namespace STS\Beankeep\Traits;

use STS\Beankeep\Values\Transaction;

trait CanCastToTransactionValue
{
    use HasTransactionFields;

    public function toValue(): Transaction
    {
        return Transaction::make(
            id: $this->getId(),
            sourceDocument: $this->getSourceDocument()->toValue(),
            date: $this->getDate(),
        );
    }
}
