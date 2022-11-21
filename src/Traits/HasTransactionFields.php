<?php

declare(strict_types=1);

namespace STS\Beankeep\Traits;

use DateTimeImmutable;
use STS\Beankeep\Interfaces\SourceDocumentInterface as SourceDocument;
use UnhandledMatchError;

trait HasTransactionFields
{
    /**
     * @throws UnhandledMatchError
     */
    static function beankeepPropertyLookup(string $beankeepPropertyName): string
    {
        return match($beankeepPropertyName) {
            'id' => 'id',
            'sourceDocument' => 'sourceDocument',
            'date' => 'date',
        };
    }

    public function getId(): string|int
    {
        return $this->{static::beankeepPropertyLookup('id')};
    }

    public function getSourceDocument(): SourceDocument
    {
        return $this->{static::beankeepPropertyLookup('sourceDocument')};
    }

    public function getDate(): DateTimeImmutable
    {
        return $this->{static::beankeepPropertyLookup('date')};
    }
}

