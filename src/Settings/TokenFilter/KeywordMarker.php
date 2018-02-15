<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class KeywordMarker
{
    use TypeAwareTrait;

    const TYPE = 'keyword_marker';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
