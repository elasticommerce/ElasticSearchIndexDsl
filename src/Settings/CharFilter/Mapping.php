<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\CharFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;
use ElastiCommerce\ElasticSearchIndexDsl\Settings\NameAwareTrait;

class Mapping
{
    use TypeAwareTrait;
    use NameAwareTrait;

    const TYPE = 'mapping';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
