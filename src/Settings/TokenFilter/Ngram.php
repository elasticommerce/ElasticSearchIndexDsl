<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class Ngram
{
    use TypeAwareTrait;

    const TYPE = 'nGram';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
