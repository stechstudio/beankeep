<?php

declare(strict_types=1);

namespace STS\Beankeep\Interfaces;

use STS\Beankeep\Values\LineItem;

interface IsLineItem
{
    public function toValue(): LineItem;

    public function getId(): string|int;

    public function getTransaction(): IsTransaction;

    public function getAccount(): IsAccount;

    public function getDebit(): int;

    public function getCredit(): int;
}
