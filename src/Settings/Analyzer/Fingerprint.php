<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class Fingerprint
{
    use TypeAwareTrait;

    const TYPE = 'fingerprint';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
