<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class Language
{
    use TypeAwareTrait;

    const TYPE = 'language';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
