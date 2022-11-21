<?php

declare(strict_types=1);

namespace STS\Beankeep\Interfaces;

use STS\Beankeep\Values\LineItem;

interface LineItemInterface
{
    public function toValue(): LineItem;

    public function getId(): string|int;

    public function getTransaction(): TransactionInterface;

    public function getAccount(): AccountInterface;

    public function getDebit(): int;

    public function getCredit(): int;
}
