<?php declare(strict_types=1);

namespace STS\Beankeep\Values;

use STS\Beankeep\Interfaces\LineItemInterface;
use STS\Beankeep\Traits\CanCastToLineItemValue;

/**
 * Record an operation (debit or credit) for a transaction against an account.
 */
// TODO(zmd): swith back to readonly class once 8.2 hits GA in December '22
final class LineItem implements LineItemInterface
{
    use CanCastToLineItemValue;

    public function __construct(
        public readonly string|int $id,
        public readonly Transaction $transaction,
        public readonly Account $account,
        public readonly int $debit,
        public readonly int $credit,
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
