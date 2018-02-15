<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class PatternCapture
{
    use TypeAwareTrait;

    const TYPE = 'pattern_capture';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
