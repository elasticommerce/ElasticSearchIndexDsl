<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class Ngram
{
    use TypeAwareTrait;

    const TYPE = 'ngram';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
