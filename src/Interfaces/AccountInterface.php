<?php

declare(strict_types=1);

namespace STS\Beankeep\Interfaces;

use STS\Beankeep\Enums\AccountType;
use STS\Beankeep\Values\Account;

interface AccountInterface
{
    public function toValue(): Account;

    public function getId(): string|int;

    public function getAccountNumber(): string;

    public function getBaseType(): AccountType;

    public function getName(): string;
}
