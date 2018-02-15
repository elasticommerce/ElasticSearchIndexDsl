<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class Truncate
{
    use TypeAwareTrait;

    const TYPE = 'truncate';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
