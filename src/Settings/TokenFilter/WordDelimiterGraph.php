<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class WordDelimiterGraph
{
    use TypeAwareTrait;

    const TYPE = 'word_delimiter_graph';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
