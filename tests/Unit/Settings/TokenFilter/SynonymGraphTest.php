<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\SynonymGraph;
use PHPUnit\Framework\TestCase;

/**
 * Test for SynonymGraph TokenFilter.
 */
class SynonymGraphTest extends TestCase
{
    /**
     * @var SynonymGraph
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new SynonymGraph();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\SynonymGraph',
            new SynonymGraph()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('synonym_graph', $this->object->getType());
    }
}
