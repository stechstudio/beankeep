<?php

declare(strict_types=1);

namespace STS\Beankeep\Traits;

use DateTimeImmutable;
use STS\Beankeep\Interfaces\IsSourceDocument as SourceDocument;

trait HasAccountAccessors
{
    use CanLookupAttribute;

    public static array $accountFieldAttributes = [
        'getId' => 'id',
        'getSourceDocument' => 'sourceDocument',
        'getDate' => 'date',
    ];

    public function getId(): string|int
    {
        return $this->lookupAttribute(__METHOD__);
    }

    public function getSourceDocument(): IsSourceDocument
    {
        return $this->lookupAttribute(__METHOD__);
    }

    public function getDate(): DateTimeImmutable
    {
        return $this->lookupAttribute(__METHOD__);
    }
}

