<?php

declare(strict_types=1);

namespace STS\Beankeep\Tests\Values;

use PHPUnit\Framework\TestCase;
use STS\Beankeep\Values\SourceDocument;
use STS\Beankeep\Interfaces\IsSourceDocument;
use DateTimeImmutable;

final class SourceDocumentTest extends TestCase
{
    protected $dateStr = '2021-09-09 05:00:00 -08:00';

    protected $memo = 'Reticulate the splines';

    protected $attachment = '2021-09-09-splines-r-us--reticulating-service-invoice.pdf';

    protected function date(?string $dateStr=null): DateTimeImmutable
    {
        return new \DateTimeImmutable($dateStr ?? $this->dateStr);
    }

    public function testMemberValues(): void
    {
        $sourceDocument = new SourceDocument(
            id: 1,
            date: $this->date(),
            memo: $this->memo,
            attachment: $this->attachment,
        );

        $this->assertEquals(1, $sourceDocument->id);
        $this->assertEquals($this->date(), $sourceDocument->date);
        $this->assertEquals($this->memo, $sourceDocument->memo);
        $this->assertEquals($this->attachment, $sourceDocument->attachment);
    }

    public function testMakeConstructorAlias(): void
    {
        $sourceDocument = SourceDocument::make(
            id: 1,
            date: $this->date(),
            memo: $this->memo,
            attachment: $this->attachment,
        );

        $this->assertEquals(1, $sourceDocument->id);
        $this->assertEquals($this->date(), $sourceDocument->date);
        $this->assertEquals($this->memo, $sourceDocument->memo);
        $this->assertEquals($this->attachment, $sourceDocument->attachment);
    }
}
