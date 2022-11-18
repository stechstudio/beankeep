<?php

declare(strict_types=1);

namespace STS\Beankeep\Traits;

use UnhandledMatchError;

trait HasAccountAccessors
{
    /**
     * @var array<string, string> $gettersToAttrs
     */
    static array $gettersToAttrs = [
        'id' => 'id',
        'accountNumber' => 'accountNumber',
        'baseType' => 'baseType',
        'name' => 'name',
    ];

    public function getId(): string|int
    {
        return $this->${static::$gettersToAttrs['id']};
    }

    public function getAccountNumber(): string
    {
        return $this->${static::$gettersToAttrs['accountNumber']};
    }

    public function getBaseType(): string
    {
        return $this->${static::$gettersToAttrs['baseType']};
    }

    public function getName(): string
    {
        return $this->${static::$gettersToAttrs['name']};
    }
}
