<?php

declare(strict_types=1);

namespace STS\Beankeep\Traits;

trait CanLookupAttribute
{
    // TODO(zmd): check if $beankeepGettersToAttributes property exists, and
    //   use it by default _if so_
    // TODO(zmd): otherwise provide default implementation (e.g. "getId" => "Id" => "id")?
    abstract protected static function mapBeankeepGetterToAttribute(string $getter): string;

    protected function getBeankeepAttribute(string $methodName): mixed
    {
        $methodNameParts = explode('::', $methodName);
        $bareMethodName = end($methodNameParts);
        $attribute = static::beankeepGetterToAttribute($bareMethodName);

        return $this->$attribute;
    }
}
