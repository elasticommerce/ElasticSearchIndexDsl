<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class SimplePatternSplit
{
    use TypeAwareTrait;

    const TYPE = 'simple_pattern_split';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
