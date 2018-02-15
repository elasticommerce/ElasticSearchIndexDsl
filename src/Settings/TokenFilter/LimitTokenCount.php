<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class LimitTokenCount
{
    use TypeAwareTrait;

    const TYPE = 'limit';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
