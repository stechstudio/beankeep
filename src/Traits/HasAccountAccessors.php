<?php

declare(strict_types=1);

namespace STS\Beankeep\Traits;

trait HasAccountAccessors
{
    use CanLookupAttribute;

    protected static function mapBeankeepGetterToAttribute(string $getter): string
    {
        return match($getter) {
            'getId' => 'id',
            'getAccountNumber' => 'accountNumber',
            'getBaseType' => 'baseType',
            'getName' => 'name',
        };
    }

    public function getId(): string|int
    {
        return $this->getBeankeepAttribute(__METHOD__);
    }

    public function getAccountNumber(): string
    {
        return $this->getBeankeepAttribute(__METHOD__);
    }

    public function getBaseType(): string
    {
        return $this->getBeankeepAttribute(__METHOD__);
    }

    public function getName(): string
    {
        return $this->getBeankeepAttribute(__METHOD__);
    }
}
