<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class Trim
{
    use TypeAwareTrait;

    const TYPE = 'trim';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
