<?php declare(strict_types=1);

namespace STS\Beankeep\Values;

use STS\Beankeep\Interfaces\LineItemInterface;
use STS\Beankeep\Traits\CanCastToLineItemValue;

/**
 * Record an operation (debit or credit) for a transaction against an account.
 */
final readonly class LineItem implements LineItemInterface
{
    use CanCastToLineItemValue;

    public function __construct(
        public string|int $id,
        public Transaction $transaction,
        public Account $account,
        public int $debit,
        public int $credit,
    ) {
    }

    public static function make(
        string|int $id,
        Transaction $transaction,
        Account $account,
        int $debit,
        int $credit,
    ): self {
        return new self($id, $transaction, $account, $debit, $credit);
    }

    public function toValue(): self
    {
        return $this;
    }
}
