<?php declare(strict_types=1);

namespace STS\Beankeep\Values;

use STS\Beankeep\Interfaces\IsTransaction;
use STS\Beankeep\Traits\HasTransactionAccessors;

/**
 * Association when a source document is posted to the system via two or more
 * line items.
 */
final readonly class Transaction implements IsTransaction
{
    use HasTransactionAccessors;

    public function __construct(
        public int $id,
        public SourceDocument $sourceDocument,
        public DateTimeImmutable $date,
    ) {}

    public static function make(...$attributes): self
    {
        return new self(...$attributes);
    }

    public static toValue(): self
    {
        return $this;
    }
}
