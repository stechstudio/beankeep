<?php declare(strict_types=1);

namespace STS\Beankeep\Values;

use STS\Beankeep\Interfaces\IsAccount;
use STS\Beankeep\Traits\CanCastToAccountValue;

/**
 * Record all activity in the chart of accounts.
 */
final readonly class Account implements IsAccount
{
    use CanCastToAccountValue;

    public function __construct(
        public int $id,
        public string $accountNumber,
        public string $baseType,
        public string $name,
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
