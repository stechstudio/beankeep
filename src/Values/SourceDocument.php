<?php declare(strict_types=1);

namespace STS\Beankeep\Values;

use DateTimeImmutable;
use STS\Beankeep\Interfaces\SourceDocumentInterface;
use STS\Beankeep\Traits\CanCastToSourceDocumentValue;

/**
 * Track the source of financial transactions recorded by the system.
 */
// TODO(zmd): swith back to readonly class once 8.2 hits GA in December '22
final class SourceDocument implements SourceDocumentInterface
{
    use CanCastToSourceDocumentValue;

    public function __construct(
        public readonly string|int $id,
        public readonly DateTimeImmutable $date,
        public readonly string $memo,
        public readonly string $attachment,
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
