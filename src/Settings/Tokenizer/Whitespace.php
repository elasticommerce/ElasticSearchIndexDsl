<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\CommonsAwareTrait;
use ElastiCommerce\ElasticSearchIndexDsl\Settings\AnalysisInterface;
use ElastiCommerce\Util\Data\DataObject;

class Whitespace extends DataObject implements AnalysisInterface
{
    use CommonsAwareTrait;

    const TYPE = 'whitespace';

    protected $type = self::TYPE;
}
