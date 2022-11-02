<?php

declare(strict_types=1);

namespace STS\Beankeep\Interfaces;

use DateTimeImmutable;

interface IsTransaction
{
    public function getId(): string|int;

    public function getSourceDocument(): IsSourceDocument;

    public function getDate(): DateTimeImmutable;
}
