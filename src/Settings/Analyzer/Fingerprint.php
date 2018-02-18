<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\AnalysisInterface;
use ElastiCommerce\ElasticSearchIndexDsl\Settings\CommonsAwareTrait;
use ElastiCommerce\Util\Data\DataObject;

/**
 * Class Fingerprint
 * @package ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/analysis-fingerprint-analyzer.html
 */
class Fingerprint extends DataObject implements AnalysisInterface
{
    use CommonsAwareTrait;
    use StopAwareTrait;

    /**
     * @var string
     */
    const TYPE = 'fingerprint';

    /**
     * @var string
     */
    protected $type = self::TYPE;

    /**
     * @var string[]
     */
    protected $parameters = [
        'separator',
        'max_output_size',
        'stopwords',
        'stopwords_path',
    ];

    /**
     * @var string[]
     */
    protected $getters = [
        'stopwords' => 'getStopwordsParameters',
    ];

    /**
     * @param string $separator
     */
    public function setSeparator(string $separator)
    {
        $this->setData('separator', $separator);
    }

    /**
     * @return string
     */
    public function getSeparator(): string
    {
        return $this->getData('separator');
    }

    /**
     * @param int $size
     */
    public function setMaxOutputSize(int $size)
    {
        $this->setData('max_output_size', $size);
    }

    /**
     * @return int
     */
    public function getMaxOutputSize(): int
    {
        $this->getData('max_output_size');
    }
}
