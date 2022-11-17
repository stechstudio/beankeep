<?php

declare(strict_types=1);

namespace STS\Beankeep\Interfaces;

use STS\Beankeep\Values\Account;

interface IsAccount
{
    public function toValue(): Account;

    public function getId(): string|int;

    public function getAccountNumber(): string;

    public function getBaseType(): string;

    public function getName(): string;
}
