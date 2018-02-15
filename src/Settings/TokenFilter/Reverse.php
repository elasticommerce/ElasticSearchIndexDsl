<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class Reverse
{
    use TypeAwareTrait;

    const TYPE = 'reverse';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
