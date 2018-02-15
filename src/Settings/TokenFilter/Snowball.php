<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class Snowball
{
    use TypeAwareTrait;

    const TYPE = 'snowball';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
