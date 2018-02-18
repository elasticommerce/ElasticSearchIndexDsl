<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\CharFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\CharFilter\Mapping;
use PHPUnit\Framework\TestCase;

/**
 * Test for Mapping CharFilter.
 */
class MappingTest extends TestCase
{
    /**
     * @var Mapping
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Mapping();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\CharFilter\Mapping',
            new Mapping()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('mapping', $this->object->getType());
    }
}
