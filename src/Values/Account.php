<?php declare(strict_types=1);

namespace STS\Beankeep\Values;

use STS\Beankeep\Interfaces\IsAccount;
use STS\Beankeep\Traits\HasAccountAccessors;

/**
 * Record all activity in the chart of accounts.
 */
final readonly class Account
{
    use IsAccount;
    use HasAccountAccessors;

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
}
