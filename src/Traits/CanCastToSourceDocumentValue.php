<?php

declare(strict_types=1);

namespace STS\Beankeep\Traits;

use STS\Beankeep\Values\SourceDocument;

trait CanCastToSourceDocumentValue
{
    use HasSourceDocumentFields;

    public function toValue(): SourceDocument
    {
        return SourceDocument::make(
            id: $this->getId(),
            date: $this->getDate(),
            memo: $this->getMemo(),
            attachment: $this->getAttachment(),
        );
    }
}
