<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class Uppercase
{
    use TypeAwareTrait;

    const TYPE = 'uppercase';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
