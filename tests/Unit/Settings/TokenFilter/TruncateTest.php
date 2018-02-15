<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Truncate;
use PHPUnit\Framework\TestCase;

/**
 * Test for Truncate TokenFilter.
 */
class TruncateTest extends TestCase
{
    /**
     * @var Truncate
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Truncate();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Truncate',
            new Truncate()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('truncate', $this->object->getType());
    }
}
