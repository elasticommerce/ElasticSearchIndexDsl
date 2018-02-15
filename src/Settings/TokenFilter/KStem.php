<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class KStem
{
    use TypeAwareTrait;

    const TYPE = 'kstem';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
