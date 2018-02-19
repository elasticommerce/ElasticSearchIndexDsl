<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\CommonsAwareTrait;
use ElastiCommerce\ElasticSearchIndexDsl\Settings\AnalysisInterface;
use ElastiCommerce\Util\Data\DataObject;

class WordDelimiterGraph extends DataObject implements AnalysisInterface
{
    use CommonsAwareTrait;

    const TYPE = 'word_delimiter_graph';

    protected $type = self::TYPE;
}
