<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class Whitespace
{
    use TypeAwareTrait;

    const TYPE = 'whitespace';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
