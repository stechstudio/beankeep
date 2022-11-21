<?php

declare(strict_types=1);

namespace STS\Beankeep\Interfaces;

use DateTimeImmutable;
use STS\Beankeep\Values\SourceDocument;

interface SourceDocumentInterface
{
    public function toValue(): SourceDocument;

    public function getId(): string|int;

    public function getDate(): DateTimeImmutable;

    public function getMemo(): string;

    public function getAttachment(): string;
}
