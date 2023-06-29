<?php declare(strict_types=1);

namespace STS\Beankeep\Values;

use STS\Beankeep\Enums\AccountType;
use STS\Beankeep\Interfaces\AccountInterface;
use STS\Beankeep\Traits\CanCastToAccountValue;

/**
 * Record all activity in the chart of accounts.
 */
final readonly class Account implements AccountInterface
{
    use CanCastToAccountValue;

    public function __construct(
        public string|int $id,
        public string $accountNumber,
        public AccountType $type,
        public string $name,
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
