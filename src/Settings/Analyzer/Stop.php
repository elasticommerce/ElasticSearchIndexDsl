<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\AnalysisInterface;
use ElastiCommerce\ElasticSearchIndexDsl\Settings\CommonsAwareTrait;
use ElastiCommerce\Util\Data\DataObject;

class Stop extends DataObject implements AnalysisInterface
{
    use CommonsAwareTrait;
    use StopAwareTrait;

    /**
     * @var string
     */
    const TYPE = 'stop';

    /**
     * @var string
     */
    protected $type = self::TYPE;

    /**
     * @var string[]
     */
    protected $parameters = [
        'stopwords',
        'stopwords_path'
    ];

    /**
     * @var string[]
     */
    protected $getters = [
        'stopwords' => 'getStopwordsParameters',
    ];
}
