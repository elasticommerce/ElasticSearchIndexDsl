<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\AnalysisInterface;
use ElastiCommerce\ElasticSearchIndexDsl\Settings\CommonsAwareTrait;
use ElastiCommerce\Util\Data\DataObject;

/**
 * Class Language
 * @package ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer
 * @see https://www.elastic.co/guide/en/elasticsearch/guide/current/configuring-language-analyzers.html
 * @see https://www.elastic.co/guide/en/elasticsearch/reference/current/analysis-lang-analyzer.html
 */
class Language extends DataObject implements AnalysisInterface
{
    use CommonsAwareTrait;
    use StopAwareTrait;

    /**
     * @var string
     */
    const TYPE = 'language';

    /**
     * @var string
     */
    protected $type = self::TYPE;

    /**
     * @var string[]
     */
    protected $languages = [
        'arabic',
        'armenian',
        'basque',
        'bengali',
        'brazilian',
        'bulgarian',
        'catalan',
        'cjk',
        'czech',
        'danish',
        'dutch',
        'english',
        'finnish',
        'french',
        'galician',
        'german',
        'greek',
        'hindi',
        'hungarian',
        'indonesian',
        'irish',
        'italian',
        'latvian',
        'lithuanian',
        'norwegian',
        'persian',
        'portuguese',
        'romanian',
        'russian',
        'sorani',
        'spanish',
        'swedish',
        'turkish',
        'thai'
    ];

    /**
     * @var string[]
     */
    protected $parameters = [
        'stem_exclusion',
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
     * @param string $language
     */
    public function setLanguage(string $language)
    {
        if (false === in_array($language, $this->languages)) {
            throw new \InvalidArgumentException(sprintf('The language "%s" is not supporded.', $language));
        }
        $this->setName($language);
        $this->type = $language;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->type;
    }

    /**
     * @param string[] $words
     */
    public function setStemExclusion(array $words = [])
    {
        $words = array_filter(array_map('trim', $words));
        if (isVoid($words)) {
            return;
        }
        if (true === $this->hasData('stem_exclusion')) {
            $words = array_merge($this->getData('stem_exclusion'), $words);
        }
        $this->setData('stem_exclusion', $words);
    }
}
