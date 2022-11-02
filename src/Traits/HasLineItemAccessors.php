<?php

declare(strict_types=1);

namespace STS\Beankeep\Traits;

trait HasAccountAccessors
{
    use CanLookupAttribute;

    // TODO(zmd): finish implementing me!
    public static array $accountFieldAttributes = [
        'getId' => 'id',
        '' => '???',
        '' => '???',
        '' => '???',
    ];

    public function getId(): string|int
    {
        return $this->lookupAttribute(__METHOD__);
    }

    public function getAccountNumber(): string
    {
        return $this->lookupAttribute(__METHOD__);
    }

    public function getBaseType(): string
    {
        return $this->lookupAttribute(__METHOD__);
    }

    public function getName(): string
    {
        return $this->lookupAttribute(__METHOD__);
    }
}

