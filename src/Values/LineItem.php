<?php declare(strict_types=1);

namespace STS\Beankeep\Values;

use STS\Beankeep\Interfaces\IsLineItem;
use STS\Beankeep\Traits\CanCastToLineItemValue;

/**
 * Record an operation (debit or credit) for a transaction against an account.
 */
final readonly class LineItem implements IsLineItem
{
    use CanCastToLineItemValue;

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

    public static toValue(): self
    {
        return $this;
    }
}
