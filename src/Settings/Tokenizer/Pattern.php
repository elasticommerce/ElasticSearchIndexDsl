<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class Pattern
{
    use TypeAwareTrait;

    const TYPE = 'pattern';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
