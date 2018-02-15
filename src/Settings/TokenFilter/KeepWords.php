<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class KeepWords
{
    use TypeAwareTrait;

    const TYPE = 'keep';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
