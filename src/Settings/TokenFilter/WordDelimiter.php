<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class WordDelimiter
{
    use TypeAwareTrait;

    const TYPE = 'word_delimiter';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
