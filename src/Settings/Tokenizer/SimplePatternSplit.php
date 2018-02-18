<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\CommonsAwareTrait;
use ElastiCommerce\ElasticSearchIndexDsl\Settings\AnalysisInterface;
use ElastiCommerce\Util\Data\DataObject;

class SimplePatternSplit extends DataObject implements AnalysisInterface
{
    use CommonsAwareTrait;

    const TYPE = 'simple_pattern_split';

    protected $type = self::TYPE;
}
