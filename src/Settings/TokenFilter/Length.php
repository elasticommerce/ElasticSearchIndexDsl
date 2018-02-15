<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class Length
{
    use TypeAwareTrait;

    const TYPE = 'length';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
