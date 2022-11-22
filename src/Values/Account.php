<?php declare(strict_types=1);

namespace STS\Beankeep\Values;

use STS\Beankeep\Enums\AccountType;
use STS\Beankeep\Interfaces\AccountInterface;
use STS\Beankeep\Traits\CanCastToAccountValue;

/**
 * Record all activity in the chart of accounts.
 */
// TODO(zmd): swith back to readonly class once 8.2 hits GA in December '22
final class Account implements AccountInterface
{
    use CanCastToAccountValue;

    public function __construct(
        public readonly string|int $id,
        public readonly string $accountNumber,
        public readonly AccountType $type,
        public readonly string $name,
    ) {
    }

    public static function make(
        string|int $id,
        string $accountNumber,
        AccountType $type,
        string $name,
    ): self {
        return new self($id, $accountNumber, $type, $name);
    }

    public function toValue(): self
    {
        return $this;
    }
}
