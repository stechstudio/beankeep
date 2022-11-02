<?php

declare(strict_types=1);

namespace STS\Beankeep\Interfaces;

interface IsLineItem
{
    public function getId(): string|int;

    public function getTransaction(): IsTransaction;

    public function getAccount(): IsAccount;

    public function getDebit(): int;

    public function getCredit(): int;
}
