<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class Shingle
{
    use TypeAwareTrait;

    const TYPE = 'shingle';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
