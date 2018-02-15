<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class EdgeNGram
{
    use TypeAwareTrait;

    const TYPE = 'edgeNGram';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
