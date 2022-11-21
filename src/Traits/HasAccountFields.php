<?php

declare(strict_types=1);

namespace STS\Beankeep\Traits;

use STS\Beankeep\Enums\AccountType;
use UnhandledMatchError;

trait HasAccountFields
{
    /**
     * @throws UnhandledMatchError
     */
    static function beankeepPropertyLookup(string $beankeepPropertyName): string
    {
        return match($beankeepPropertyName) {
            'id' => 'id',
            'accountNumber' => 'accountNumber',
            'type' => 'type',
            'name' => 'name',
        };
    }

    public function getId(): string|int
    {
        return $this->{static::beankeepPropertyLookup('id')};
    }

    public function getAccountNumber(): string
    {
        return $this->{static::beankeepPropertyLookup('accountNumber')};
    }

    public function getType(): AccountType
    {
        return $this->{static::beankeepPropertyLookup('type')};
    }

    public function getName(): string
    {
        return $this->{static::beankeepPropertyLookup('name')};
    }
}
