<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class CommonGrams
{
    use TypeAwareTrait;

    const TYPE = 'common_grams';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
