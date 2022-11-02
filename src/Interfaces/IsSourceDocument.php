<?php

declare(strict_types=1);

namespace STS\Beankeep\Interfaces;

use DateTimeImmutable;

interface IsSourceDocument
{
    public function getId(): string|int;

    public function getDate(): DateTimeImmutable;

    public function getMemo(): string;

    public function getAttachment(): string;
}
