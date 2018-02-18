<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer\Custom;
use PHPUnit\Framework\TestCase;

/**
 * Test for Custom Analyzer.
 */
class CustomTest extends TestCase
{
    /**
     * @var Custom
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Custom();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer\Custom',
            new Custom()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('custom', $this->object->getType());
    }

    public function testToArray()
    {
        $this->object->setName('custom_test');
        $this->object->setCharFilter(['emoticons']);
        $this->object->setTokenizer('punctuation');
        $this->object->setFilter(['lowercase', 'english_stop']);

        $expect = [
            'custom_test' => [
                'type' => 'custom',
                'tokenizer' => 'punctuation',
                'char_filter' => ['emoticons'],
                'filter' => ['lowercase', 'english_stop']
            ]
        ];
        $this->assertEquals($expect, $this->object->toSchema());
    }
}
