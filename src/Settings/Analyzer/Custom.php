<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\AnalysisInterface;
use ElastiCommerce\ElasticSearchIndexDsl\Settings\CommonsAwareTrait;
use ElastiCommerce\Util\Data\DataObject;

/**
 * Class Custom
 * @package ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/analysis-custom-analyzer.html
 */
class Custom extends DataObject implements AnalysisInterface
{
    use CommonsAwareTrait;

    /**
     * @var string
     */
    const TYPE = 'custom';

    /**
     * @var string
     */
    protected $type = self::TYPE;

    /**
     * @var string[]
     */
    protected $parameters = [
        'tokenizer',
        'char_filter',
        'filter',
        'position_increment_gap',
    ];

    /**
     * @var string[]
     */
    protected $getters = [];

    /**
     * @param string $name
     */
    public function setTokenizer(string $name)
    {
        $this->setData('tokenizer', $name);
    }

    /**
     * @return string
     */
    public function getTokenizer(): string
    {
        return $this->getData('tokenizer');
    }

    /**
     * @param string[] $char_filter
     */
    public function setCharFilter(array $char_filter = [])
    {
        $char_filter = array_filter(array_map('trim', $char_filter));
        if (isVoid($char_filter)) {
            return;
        }
        if (true === $this->hasData('char_filter')) {
            $char_filter = array_merge($this->getData('char_filter'), $char_filter);
        }
        $this->setData('char_filter', $char_filter);
    }

    /**
     * @return string[]
     */
    public function getCharFilter(): array
    {
        return $this->getData('char_filter');
    }

    /**
     * @param string[] $filter
     */
    public function setFilter(array $filter = [])
    {
        $filter = array_filter(array_map('trim', $filter));
        if (true === isVoid($filter)) {
            return;
        }
        if (true === $this->hasData('filter')) {
            $filter = array_merge($this->getData('filter'), $filter);
        }
        $this->setData('filter', $filter);
    }

    /**
     * @return string[]
     */
    public function getFilter(): array
    {
        return $this->getData('filter');
    }

    /**
     * @param int $position_increment_gap
     */
    public function setPositionIncrementGap(int $position_increment_gap)
    {
        $this->setData('position_increment_gap', $position_increment_gap);
    }

    /**
     * @return int
     */
    public function getPositionIncrementGap(): int
    {
        return $this->getData('position_increment_gap');
    }
}
