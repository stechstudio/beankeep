<?php

declare(strict_types=1);

namespace STS\Beankeep\Traits;

use DateTimeImmutable;
use STS\Beankeep\Values\SourceDocument;

trait HasSourceDocumentAccessors
{
    use CanLookupAttribute;

    public static array $accountFieldAttributes = [
        'getId' => 'id',
        'getDate' => 'date',
        'getMemo' => 'memo',
        'getAttachment' => 'attachment',
    ];

    // TODO(zmd): move to own trait
    public function toValue(): SourceDocument
    {
        return SourceDocument::make(
            id: $this->getId(),
            date: $this->getDate(),
            memo: $this->getMemo(),
            attachment: $this->getAttachment(),
        );
    }

    public function getId(): string|int
    {
        return $this->lookupAttribute(__METHOD__);
    }

    public function getDate(): DateTimeImmutable
    {
        return $this->lookupAttribute(__METHOD__);
    }

    public function getMemo(): string
    {
        return $this->lookupAttribute(__METHOD__);
    }

    public function getAttachment(): string
    {
        return $this->lookupAttribute(__METHOD__);
    }
}
