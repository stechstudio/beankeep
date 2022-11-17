<?php declare(strict_types=1);

namespace STS\Beankeep\Values;

use STS\Beankeep\Interfaces\IsSourceDocument;
use STS\Beankeep\Traits\HasSourceDocumentAccessors;

/**
 * Track the source of financial transactions recorded by the system.
 */
final readonly class SourceDocument
{
    use IsSourceDocument;
    use HasSourceDocumentAccessors;

    public function __construct(
        public int $id,
        public DateTimeImmutable $date,
        public string $memo,
        public string $attachment,
    ) {}

    public static function make(...$attributes): self
    {
        return new self(...$attributes);
    }
}
