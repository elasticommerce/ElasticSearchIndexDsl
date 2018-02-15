<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer\Stop;
use PHPUnit\Framework\TestCase;

/**
 * Test for Stop Analyzer.
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer\Stop',
            new Stop()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('stop', $this->object->getType());
    }
}
