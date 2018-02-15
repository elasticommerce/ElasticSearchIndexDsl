<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class PorterStem
{
    use TypeAwareTrait;

    const TYPE = 'porter_stem';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
