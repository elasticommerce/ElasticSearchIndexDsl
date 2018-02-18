<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\CommonsAwareTrait;
use ElastiCommerce\ElasticSearchIndexDsl\Settings\AnalysisInterface;
use ElastiCommerce\Util\Data\DataObject;

class PathHierarchy extends DataObject implements AnalysisInterface
{
    use CommonsAwareTrait;

    const TYPE = 'path_hierarchy';

    protected $type = self::TYPE;
}
