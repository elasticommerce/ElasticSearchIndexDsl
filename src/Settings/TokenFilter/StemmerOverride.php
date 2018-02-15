<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class StemmerOverride
{
    use TypeAwareTrait;

    const TYPE = 'stemmer_override';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
