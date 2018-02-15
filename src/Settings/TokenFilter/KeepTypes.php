<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class KeepTypes
{
    use TypeAwareTrait;

    const TYPE = 'keep_types';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
