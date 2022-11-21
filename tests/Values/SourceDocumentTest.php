<?php

declare(strict_types=1);

namespace STS\Beankeep\Tests\Values;

use DateTimeImmutable;
use STS\Beankeep\Interfaces\SourceDocumentInterface;
use STS\Beankeep\Values\SourceDocument;

final class SourceDocumentTest extends TestCase
{
    protected string $dateStr = '2021-09-09 05:00:00 -08:00';

    protected string $memo = 'Reticulate the splines';

    protected string $attachment = '2021-09-09-splines-r-us--reticulating-service-invoice.pdf';

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

    public function testGetters(): void
    {
        $sourceDocument = new SourceDocument(
            id: 1,
            date: $this->date(),
            memo: $this->memo,
            attachment: $this->attachment,
        );

        $this->assertEquals(1, $sourceDocument->getId());
        $this->assertEquals($this->date(), $sourceDocument->getDate());
        $this->assertEquals($this->memo, $sourceDocument->getMemo());
        $this->assertEquals($this->attachment, $sourceDocument->getAttachment());
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

    public function testIdMayBeString(): void
    {
        $sourceDocument = SourceDocument::make(
            id: 'abc',
            date: $this->date(),
            memo: $this->memo,
            attachment: $this->attachment,
        );

        $this->assertEquals('abc', $sourceDocument->id);
    }

    public function testSatisfiesSourceDocumentInterface(): void
    {
        $sourceDocument = SourceDocument::make(
            id: 'abc',
            date: $this->date(),
            memo: $this->memo,
            attachment: $this->attachment,
        );

        $this->assertTrue($sourceDocument instanceOf SourceDocumentInterface);
    }

    public function testToValueIsIdentityFunction(): void
    {
        $sourceDocument = SourceDocument::make(
            id: 'abc',
            date: $this->date(),
            memo: $this->memo,
            attachment: $this->attachment,
        );

        $this->assertTrue($sourceDocument === $sourceDocument->toValue());
    }
}
