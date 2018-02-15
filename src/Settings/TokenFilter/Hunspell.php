<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class Hunspell
{
    use TypeAwareTrait;

    const TYPE = 'hunspell';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
