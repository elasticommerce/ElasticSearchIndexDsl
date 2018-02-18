<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Stop;
use PHPUnit\Framework\TestCase;

/**
 * Test for Stop TokenFilter.
 */
class StopTest extends TestCase
{
    /**
     * @var Stop
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Stop();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Stop',
            new Stop()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('stop', $this->object->getType());
    }
}
