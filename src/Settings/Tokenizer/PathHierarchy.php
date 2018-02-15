<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class PathHierarchy
{
    use TypeAwareTrait;

    const TYPE = 'path_hierarchy';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
