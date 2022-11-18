<?php

declare(strict_types=1);

namespace STS\Beankeep\Tests\Values;

use PHPUnit\Framework\TestCase;
use STS\Beankeep\Values\SourceDocument;
use STS\Beankeep\Interfaces\IsSourceDocument;
use DateTimeImmutable;

final class SourceDocumentTest extends TestCase
{
    public function testMemberValues(): void
    {
        $sourceDocument = new SourceDocument(
            id: 1,
            date: new \DateTimeImmutable('2021-09-09 05:00:00 -08:00'),
            memo: 'Reticulate the splines',
            attachment: '2021-09-09-splines-r-us--reticulating-service-invoice.pdf',
        );

        $this->assertEquals(1, $sourceDocument->id);
        $this->assertEquals(
            new \DateTimeImmutable('2021-09-09 05:00:00 -08:00'),
            $sourceDocument->date,
        );
        $this->assertEquals('Reticulate the splines', $sourceDocument->memo);
        $this->assertEquals(
            '2021-09-09-splines-r-us--reticulating-service-invoice.pdf',
            $sourceDocument->attachment,
        );
    }
}
