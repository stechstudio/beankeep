<?php

declare(strict_types=1);

namespace STS\Beankeep\Traits;

use DateTimeImmutable;

trait HasSourceDocumentAccessors
{
    use CanLookupAttribute;

    protected static function mapBeankeepGetterToAttribute(string $getter): string
    {
        return match($getter) {
            'getId' => 'id',
            'getDate' => 'date',
            'getMemo' => 'memo',
            'getAttachment' => 'attachment',
        };
    }

    public function getId(): string|int
    {
        return $this->getBeankeepAttribute(__METHOD__);
    }

    public function getDate(): DateTimeImmutable
    {
        return $this->getBeankeepAttribute(__METHOD__);
    }

    public function getMemo(): string
    {
        return $this->getBeankeepAttribute(__METHOD__);
    }

    public function getAttachment(): string
    {
        return $this->getBeankeepAttribute(__METHOD__);
    }
}
