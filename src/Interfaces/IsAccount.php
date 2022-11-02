<?php

declare(strict_types=1);

namespace STS\Beankeep\Interfaces;

interface IsAccount
{
    public function getId(): string|int;

    public function getAccountNumber(): string;

    public function getBaseType(): string;

    public function getName(): string;
}
