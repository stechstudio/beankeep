<?php

declare(strict_types=1);

namespace STS\Beankeep\Traits;

use DateTimeImmutable;
use STS\Beankeep\Interfaces\IsSourceDocument as SourceDocument;
use STS\Beankeep\Values\Transaction;

trait HasTransactionAccessors
{
    use CanLookupAttribute;

    public static array $accountFieldAttributes = [
        'getId' => 'id',
        'getSourceDocument' => 'sourceDocument',
        'getDate' => 'date',
    ];

    // TODO(zmd): move to own trait
    public function toValue(): Transaction
    {
        return Transaction::make(
            id: $this->getId(),
            sourceDocument: $this->getSourceDocument()->toValue(),
            date: $this->getDate(),
        );
    }

    public function getId(): string|int
    {
        return $this->lookupAttribute(__METHOD__);
    }

    public function getSourceDocument(): SourceDocument
    {
        return $this->lookupAttribute(__METHOD__);
    }

    public function getDate(): DateTimeImmutable
    {
        return $this->lookupAttribute(__METHOD__);
    }
}

