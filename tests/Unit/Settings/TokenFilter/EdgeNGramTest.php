<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\EdgeNGram;
use PHPUnit\Framework\TestCase;

/**
 * Test for EdgeNGram TokenFilter.
 */
class EdgeNGramTest extends TestCase
{
    /**
     * @var EdgeNGram
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new EdgeNGram();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\EdgeNGram',
            new EdgeNGram()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('edgeNGram', $this->object->getType());
    }
}
