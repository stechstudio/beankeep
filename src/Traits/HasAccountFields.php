<?php

declare(strict_types=1);

namespace STS\Beankeep\Traits;

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
            'baseType' => 'baseType',
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

    public function getBaseType(): string
    {
        return $this->{static::beankeepPropertyLookup('baseType')};
    }

    public function getName(): string
    {
        return $this->{static::beankeepPropertyLookup('name')};
    }
}
