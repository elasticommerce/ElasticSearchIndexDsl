<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer\Pattern;
use PHPUnit\Framework\TestCase;

/**
 * Test for Pattern Analyzer.
 */
class PatternTest extends TestCase
{
    /**
     * @var Pattern
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Pattern();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer\Pattern',
            new Pattern()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('pattern', $this->object->getType());
    }

    public function testToArrayWithStopwordList()
    {
        $this->object->setName('my_pattern');
        $this->object->setPattern('/^foo|bar/');
        $this->object->setLowercase(true);
        $this->object->setStopwords(["and", "is", "the"]);
        $this->object->setFlag('CASE_INSENSITIVE');
        $this->object->setFlag('COMMENTS');
        $expect = [
            'my_pattern' => [
                'type' => 'pattern',
                'pattern' => '/^foo|bar/',
                'stopwords' => ["and", "is", "the"],
                'lowercase' => true,
                'flags' => 'CASE_INSENSITIVE|COMMENTS'
            ]

        ];
        $this->assertEquals($expect, $this->object->toSchema());
    }

    public function testToArrayWithStopwordLanguage()
    {
        $this->object->setName('my_pattern');
        $this->object->setStopwordLanguage('german');

        $expect = [
            'my_pattern' => [
                'type' => 'pattern',
                'stopwords' => '_german_'
            ]

        ];
        $this->assertEquals($expect, $this->object->toSchema());
    }
}
