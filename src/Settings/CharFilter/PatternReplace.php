<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\CharFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;
use ElastiCommerce\ElasticSearchIndexDsl\Settings\NameAwareTrait;

class PatternReplace
{
    use TypeAwareTrait;
    use NameAwareTrait;

    const TYPE = 'pattern_replace';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
