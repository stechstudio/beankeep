<?php

declare(strict_types=1);

namespace STS\Beankeep\Traits;

trait HasAccountAccessors
{
    use CanLookupAttribute;

    public static array $accountFieldAttributes = [
        'getId' => 'id',
        'getAccountNumber' => 'accountNumber',
        'getBaseType' => 'baseType',
        'getName' => 'name',
    ];

    public function getId(): string|int
    {
        return $this->lookupAttribute(__METHOD__);
    }

    public function getAccountNumber(): string
    {
        return $this->lookupAttribute(__METHOD__);
    }

    public function getBaseType(): string
    {
        return $this->lookupAttribute(__METHOD__);
    }

    public function getName(): string
    {
        return $this->lookupAttribute(__METHOD__);
    }
}
