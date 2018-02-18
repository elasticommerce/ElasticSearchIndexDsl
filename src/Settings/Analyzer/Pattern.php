<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\AnalysisInterface;
use ElastiCommerce\ElasticSearchIndexDsl\Settings\CommonsAwareTrait;
use ElastiCommerce\Util\Data\DataObject;

class Pattern extends DataObject implements AnalysisInterface
{
    use CommonsAwareTrait;
    use StopAwareTrait;

    const TYPE = 'pattern';

    protected $type = self::TYPE;

    protected $validPatterns = [
        'CANON_EQ',
        'CASE_INSENSITIVE',
        'COMMENTS',
        'DOTALL',
        'LITERAL',
        'MULTILINE',
        'UNICODE_CASE',
        'UNICODE_CHARACTER_CLASS',
        'UNIX_LINES'
    ];

    /**
     * @var string[]
     */
    protected $parameters = [
        'pattern',
        'flags',
        'lowercase',
        'stopwords'
    ];

    /**
     * @var string[]
     */
    protected $getters = [
        'stopwords' => 'getStopwordsParameters',
        'flags' => 'getFlagsParameters',
    ];

    public function setPattern(string $pattern)
    {
        $this->setData('pattern', $pattern);
    }

    public function getPattern(): string
    {
        return $this->getData('pattern');
    }

    /**
     * @param string $flag
     */
    public function setFlag(string $flag)
    {
        if (false === in_array($flag, $this->validPatterns)) {
            throw new \InvalidArgumentException(sprintf('Flag "%s" is not allowed', $flag));
        }
        $flags = [$flag];
        if (true === $this->hasData('flags')) {
            $flags = array_merge($this->getData('flags'), $flags);
        }
        $this->setData('flags', $flags);
    }

    /**
     * @return string[]
     */
    public function getFlags(): array
    {
        return $this->getData('flags');
    }

    /**
     * @return string
     */
    public function getFlagsParameters(): string
    {
        if (true === isVoid($this->getData('flags'))) {
            return '';
        }
        return implode('|', $this->getData('flags'));
    }

    /**
     * @param bool $lowercase
     */
    public function setLowercase(bool $lowercase)
    {
        $this->setData('lowercase', $lowercase);
    }

    /**
     * @return bool
     */
    public function getLowercase(): bool
    {
        return $this->getData('lowercase');
    }
}
