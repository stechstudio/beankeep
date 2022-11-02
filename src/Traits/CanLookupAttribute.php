<?php

declare(strict_types=1);

namespace STS\Beankeep\Traits;

trait CanLookupAttribute
{
    public static array $accountFieldAttributes;

    protected function lookupAttribute(string $methodName): mixed
    {
        $methodNameParts = explode('::', $methodName);
        $bareMethodName = end($methodNameParts);
        $attribute = static::$accountFieldAttributes[$bareMethodName];

        return $this->$attribute;
    }
}
