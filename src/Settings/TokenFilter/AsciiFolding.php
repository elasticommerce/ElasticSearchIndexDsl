<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class AsciiFolding
{
    use TypeAwareTrait;

    const TYPE = 'asciifolding';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
