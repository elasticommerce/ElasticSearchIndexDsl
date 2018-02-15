<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class Thai
{
    use TypeAwareTrait;

    const TYPE = 'thai';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
