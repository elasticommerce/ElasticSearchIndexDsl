<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\AnalysisInterface;
use ElastiCommerce\ElasticSearchIndexDsl\Settings\CommonsAwareTrait;
use ElastiCommerce\Util\Data\DataObject;

class Standard extends DataObject implements AnalysisInterface
{
    use CommonsAwareTrait;
    use StopAwareTrait;

    const TYPE = 'standard';

    protected $type = self::TYPE;

    /**
     * @var string[]
     */
    protected $parameters = [
        'max_token_length',
        'stopwords',
        'stopwords_path'
    ];


    /**
     * @var string[]
     */
    protected $getters = [
        'stopwords' => 'getStopwordsParameters',
    ];

    /**
     * @param int $maxTokenLenght
     */
    public function setMaxTokenLenght(int $maxTokenLenght)
    {
        $this->setData('max_token_length', $maxTokenLenght);
    }

    /**
     * @return int
     */
    public function getMaxTokenLenght(): int
    {
        return $this->getData('max_token_length');
    }
}
