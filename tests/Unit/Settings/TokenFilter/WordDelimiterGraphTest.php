<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\WordDelimiterGraph;
use PHPUnit\Framework\TestCase;

/**
 * Test for WordDelimiterGraph TokenFilter.
 */
class WordDelimiterGraphTest extends TestCase
{
    /**
     * @var WordDelimiterGraph
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new WordDelimiterGraph();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\WordDelimiterGraph',
            new WordDelimiterGraph()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('word_delimiter_graph', $this->object->getType());
    }
}
