<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\CommonsAwareTrait;
use ElastiCommerce\ElasticSearchIndexDsl\Settings\AnalysisInterface;
use ElastiCommerce\Util\Data\DataObject;

class SimplePattern extends DataObject implements AnalysisInterface
{
    use CommonsAwareTrait;

    const TYPE = 'simple_pattern';

    protected $type = self::TYPE;
}
