<?php

declare(strict_types=1);

namespace STS\Beankeep\Traits;

use DateTimeImmutable;
use STS\Beankeep\Interfaces\IsSourceDocument as SourceDocument;

trait HasTransactionAccessors
{
    use CanLookupAttribute;

    protected static function mapBeankeepGetterToAttribute(string $getter): string
    {
        return match($getter) {
            'getId' => 'id',
            'getSourceDocument' => 'sourceDocument',
            'getDate' => 'date',
        };
    }

    public function getId(): string|int
    {
        return $this->getBeankeepAttribute(__METHOD__);
    }

    public function getSourceDocument(): SourceDocument
    {
        return $this->getBeankeepAttribute(__METHOD__);
    }

    public function getDate(): DateTimeImmutable
    {
        return $this->getBeankeepAttribute(__METHOD__);
    }
}

