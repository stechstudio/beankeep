<?php declare(strict_types=1);

namespace STS\Beankeep\Values;

use DateTimeImmutable;
use STS\Beankeep\Interfaces\IsTransaction;
use STS\Beankeep\Traits\CanCastToTransactionValue;

/**
 * Association when a source document is posted to the system via two or more
 * line items.
 */
final readonly class Transaction implements IsTransaction
{
    use CanCastToTransactionValue;

    public function __construct(
        public string|int $id,
        public SourceDocument $sourceDocument,
        public DateTimeImmutable $date,
    ) {
    }

    public static function make(...$attributes): self
    {
        return new self(...$attributes);
    }

    public function toValue(): self
    {
        return $this;
    }
}
