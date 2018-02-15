<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Classic;
use PHPUnit\Framework\TestCase;

/**
 * Test for Classic TokenFilter.
 */
class ClassicTest extends TestCase
{
    /**
     * @var Classic
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Classic();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Classic',
            new Classic()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('classic', $this->object->getType());
    }
}
