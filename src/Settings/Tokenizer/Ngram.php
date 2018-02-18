<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\CommonsAwareTrait;
use ElastiCommerce\ElasticSearchIndexDsl\Settings\AnalysisInterface;
use ElastiCommerce\Util\Data\DataObject;

class Ngram extends DataObject implements AnalysisInterface
{
    use CommonsAwareTrait;

    const TYPE = 'ngram';

    protected $type = self::TYPE;
}
