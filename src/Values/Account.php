<?php declare(strict_types=1);

namespace STS\Beankeep\Values;

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
        public string $baseType,
        public string $name,
    ) {
    }

    public static function make(
        string|int $id,
        string $accountNumber,
        string $baseType,
        string $name,
    ): self {
        return new self($id, $accountNumber, $baseType, $name);
    }

    public function toValue(): self
    {
        return $this;
    }
}
