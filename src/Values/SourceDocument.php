<?php declare(strict_types=1);

namespace STS\Beankeep\Values;

use DateTimeImmutable;
use STS\Beankeep\Interfaces\SourceDocumentInterface;
use STS\Beankeep\Traits\CanCastToSourceDocumentValue;

/**
 * Track the source of financial transactions recorded by the system.
 */
final readonly class SourceDocument implements SourceDocumentInterface
{
    use CanCastToSourceDocumentValue;

    public function __construct(
        public string|int $id,
        public DateTimeImmutable $date,
        public string $memo,
        public string $attachment,
    ) {
    }

    public static function make(
        string|int $id,
        DateTimeImmutable $date,
        string $memo,
        string $attachment,
    ): self {
        return new self($id, $date, $memo, $attachment);
    }

    public function toValue(): self
    {
        return $this;
    }
}
