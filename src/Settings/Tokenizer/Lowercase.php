<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class Lowercase
{
    use TypeAwareTrait;

    const TYPE = 'lowercase';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
