<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\CommonsAwareTrait;
use ElastiCommerce\ElasticSearchIndexDsl\Settings\AnalysisInterface;
use ElastiCommerce\Util\Data\DataObject;

class KeywordMarker extends DataObject implements AnalysisInterface
{
    use CommonsAwareTrait;

    const TYPE = 'keyword_marker';

    protected $type = self::TYPE;
}
