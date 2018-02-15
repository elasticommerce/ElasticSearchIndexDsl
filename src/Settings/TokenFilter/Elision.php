<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class Elision
{
    use TypeAwareTrait;

    const TYPE = 'elision';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
