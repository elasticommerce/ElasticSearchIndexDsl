<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\CharFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;
use ElastiCommerce\ElasticSearchIndexDsl\Settings\NameAwareTrait;

class HtmlStrip
{
    use TypeAwareTrait;
    use NameAwareTrait;

    const TYPE = 'html_strip';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
