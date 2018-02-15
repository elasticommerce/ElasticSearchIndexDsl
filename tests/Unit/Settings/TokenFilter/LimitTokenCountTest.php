<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\LimitTokenCount;
use PHPUnit\Framework\TestCase;

/**
 * Test for LimitTokenCount TokenFilter.
 */
class LimitTokenCountTest extends TestCase
{
    /**
     * @var LimitTokenCount
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new LimitTokenCount();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\LimitTokenCount',
            new LimitTokenCount()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('limit', $this->object->getType());
    }
}
