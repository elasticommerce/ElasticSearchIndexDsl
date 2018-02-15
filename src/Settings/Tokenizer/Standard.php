<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class Standard
{
    use TypeAwareTrait;

    const TYPE = 'standard';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
