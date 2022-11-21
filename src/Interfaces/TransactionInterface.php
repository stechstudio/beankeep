<?php

declare(strict_types=1);

namespace STS\Beankeep\Interfaces;

use DateTimeImmutable;
use STS\Beankeep\Values\Transaction;

interface TransactionInterface
{
    public function toValue(): Transaction;

    public function getId(): string|int;

    public function getSourceDocument(): SourceDocumentInterface;

    public function getDate(): DateTimeImmutable;
}
