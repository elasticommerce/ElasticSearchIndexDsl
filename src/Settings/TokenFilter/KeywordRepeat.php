<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class KeywordRepeat
{
    use TypeAwareTrait;

    const TYPE = 'keyword_repeat';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
