<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class Simple
{
    use TypeAwareTrait;

    const TYPE = 'simple';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
