<?php

declare(strict_types=1);

namespace STS\Beankeep\Traits;

use DateTimeImmutable;
use UnhandledMatchError;

trait HasSourceDocumentAccessors
{
    /**
     * @throws UnhandledMatchError
     */
    protected static function beankeepPropertyLookup(string $beankeepPropertyName): string
    {
        return match($beankeepPropertyName) {
            'id' => 'id',
            'date' => 'date',
            'memo' => 'memo',
            'attachment' => 'attachment',
        };
    }

    public function getId(): string|int
    {
        return $this->${static::beankeepPropertyLookup('id')};
    }

    public function getDate(): DateTimeImmutable
    {
        return $this->${static::beankeepPropertyLookup('date')};
    }

    public function getMemo(): string
    {
        return $this->${static::beankeepPropertyLookup('memo')};
    }

    public function getAttachment(): string
    {
        return $this->${static::beankeepPropertyLookup('attachment')};
    }
}
