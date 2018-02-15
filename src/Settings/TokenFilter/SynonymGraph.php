<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class SynonymGraph
{
    use TypeAwareTrait;

    const TYPE = 'synonym_graph';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
