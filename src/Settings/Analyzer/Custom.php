<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class Custom
{
    use TypeAwareTrait;

    const TYPE = 'custom';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}