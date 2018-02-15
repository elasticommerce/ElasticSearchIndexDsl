<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class Phonetic
{
    use TypeAwareTrait;

    const TYPE = 'phonetic';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
