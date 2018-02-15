<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class EdgeNgram
{
    use TypeAwareTrait;

    const TYPE = 'edge_ngram';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
