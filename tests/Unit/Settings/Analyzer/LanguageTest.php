<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer\Language;
use PHPUnit\Framework\TestCase;

/**
 * Test for Language Analyzer.
 */
class LanguageTest extends TestCase
{
    /**
     * @var Language
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Language();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown()
    {
        $this->object = null;
        parent::tearDown();
    }

    public function testItCanBeInstantiated()
    {
        $this->assertInstanceOf(
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer\Language',
            new Language()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('language', $this->object->getType());
    }

    /**
     * @param string $language
     * @param string[] $expect
     * @dataProvider allLanguagesTestDataProvider
     */
    public function testValidAllLanguages($language, $expect)
    {
        $this->object->setLanguage($language);
        $this->object->setName(sprintf('my_%s', $language));
        $this->assertEquals($expect, $this->object->toSchema());
    }

    /**
     * @return string[]
     */
    public function allLanguagesTestDataProvider()
    {
        $languages = [
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
        $output = [];
        foreach ($languages as $language) {
            $output[$language] = [
                'language' => $language,
                'expected' => [sprintf('my_%s', $language) => ['type' => $language]]
            ];
        }
        return $output;
    }
}
