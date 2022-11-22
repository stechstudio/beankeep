<?php declare(strict_types=1);

namespace STS\Beankeep\Values;

use DateTimeImmutable;
use STS\Beankeep\Interfaces\TransactionInterface;
use STS\Beankeep\Traits\CanCastToTransactionValue;

/**
 * Association when a source document is posted to the system via two or more
 * line items.
 */
// TODO(zmd): swith back to readonly class once 8.2 hits GA in December '22
final class Transaction implements TransactionInterface
{
    use CanCastToTransactionValue;

    public function __construct(
        public readonly string|int $id,
        public readonly SourceDocument $sourceDocument,
        public readonly DateTimeImmutable $date,
    ) {
    }

    public static function make(
        string|int $id,
        SourceDocument $sourceDocument,
        DateTimeImmutable $date,
    ): self {
        return new self($id, $sourceDocument, $date);
    }

    public function toValue(): self
    {
        return $this;
    }
}
