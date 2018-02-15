<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class Unique
{
    use TypeAwareTrait;

    const TYPE = 'unique';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
