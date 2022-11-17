<?php declare(strict_types=1);

namespace STS\Beankeep\Values;

use STS\Beankeep\Interfaces\IsTransaction;
use STS\Beankeep\Traits\HasTransactionAccessors;

/**
 * Association when a source document is posted to the system via two or more
 * line items.
 */
final readonly class LineItem
{
    use IsTransaction;
    use HasTransactionAccessors;

    public function __construct(
        public int $id,
        public Transaction $transaction,
        public Account $account,
        public int $debit,
        public int $credit,
    ) {}

    public static function make(...$attributes): self
    {
        return new self(...$attributes);
    }
}
