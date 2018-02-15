<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class Keyword
{
    use TypeAwareTrait;

    const TYPE = 'keyword';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
