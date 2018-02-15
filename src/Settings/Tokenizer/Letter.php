<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class Letter
{
    use TypeAwareTrait;

    const TYPE = 'letter';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
