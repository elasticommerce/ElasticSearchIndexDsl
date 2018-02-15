<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class Stemmer
{
    use TypeAwareTrait;

    const TYPE = 'stemmer';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
