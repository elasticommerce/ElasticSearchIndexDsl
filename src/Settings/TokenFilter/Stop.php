<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class Stop
{
    use TypeAwareTrait;

    const TYPE = 'stop';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
