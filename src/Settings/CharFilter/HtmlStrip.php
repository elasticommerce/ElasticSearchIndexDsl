<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\CharFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\CommonsAwareTrait;
use ElastiCommerce\ElasticSearchIndexDsl\Settings\AnalysisInterface;
use ElastiCommerce\Util\Data\DataObject;

class HtmlStrip extends DataObject implements AnalysisInterface
{
    use CommonsAwareTrait;

    const TYPE = 'html_strip';

    protected $type = self::TYPE;
}
