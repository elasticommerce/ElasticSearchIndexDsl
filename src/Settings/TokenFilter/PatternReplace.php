<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class PatternReplace
{
    use TypeAwareTrait;

    const TYPE = 'pattern_replace';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
