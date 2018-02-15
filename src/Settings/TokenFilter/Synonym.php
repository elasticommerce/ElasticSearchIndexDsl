<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class Synonym
{
    use TypeAwareTrait;

    const TYPE = 'synonym';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
