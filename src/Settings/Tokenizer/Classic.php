<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class Classic
{
    use TypeAwareTrait;

    const TYPE = 'classic';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
