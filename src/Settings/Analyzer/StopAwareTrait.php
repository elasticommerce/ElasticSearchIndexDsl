<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer;

trait StopAwareTrait
{
    /**
     * @var string[]
     */
    protected $stopLanguages = [
        '_none_',
        '_arabic_',
        '_armenian_',
        '_basque_',
        '_bengali_',
        '_brazilian_',
        '_bulgarian_',
        '_catalan_',
        '_czech_',
        '_danish_',
        '_dutch_',
        '_english_',
        '_finnish_',
        '_french_',
        '_galician_',
        '_german_',
        '_greek_',
        '_hindi_',
        '_hungarian_',
        '_indonesian_',
        '_irish_',
        '_italian_',
        '_latvian_',
        '_norwegian_',
        '_persian_',
        '_portuguese_',
        '_romanian_',
        '_russian_',
        '_sorani_',
        '_spanish_',
        '_swedish_',
        '_thai_',
        '_turkish_'
    ];

    /**
     * @param string $language
     */
    public function setStopwordLanguage(string $language)
    {
        if (false === in_array(sprintf('_%s_', $language), $this->stopLanguages)) {
            throw new \InvalidArgumentException(sprintf('The language "%s" is not supported.', $language));
        }
        $this->setData('stopword_language', $language);
    }

    /**
     * @return string
     */
    public function getStopwordLanguage(): string
    {
        return $this->getData('stopword_language');
    }

    /**
     * @param string $path
     */
    public function setStopwordsPath(string $path)
    {
        $this->setData('stopwords_path', $path);
    }

    /**
     * @return string
     */
    public function getStopwordsPath(): string
    {
        return $this->getData('stopwords_path');
    }

    /**
     * @param string[] $stopwords
     */
    public function setStopwords(array $stopwords = [])
    {
        $stopwords = array_filter(array_map('trim', $stopwords));
        if (isVoid($stopwords)) {
            return;
        }
        if (true === $this->hasData('stopwords')) {
            $stopwords = array_merge($this->getData('stopwords'), $stopwords);
        }
        $this->setData('stopwords', $stopwords);
    }

    /**
     * @return string[]
     */
    public function getStopwords(): array
    {
        return $this->getData('stopwords');
    }

    /**
     * @return array|mixed|string
     */
    protected function getStopwordsParameters()
    {
        if (true === $this->hasData('stopword_language')) {
            return sprintf('_%s_', $this->getData('stopword_language'));
        } elseif (true === $this->hasData('stopwords')) {
            return array_unique(array_filter($this->getData('stopwords')));
        }
    }
}
