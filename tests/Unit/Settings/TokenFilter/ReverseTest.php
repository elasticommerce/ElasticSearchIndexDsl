<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Reverse;
use PHPUnit\Framework\TestCase;

/**
 * Test for Reverse TokenFilter.
 */
class ReverseTest extends TestCase
{
    /**
     * @var Reverse
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Reverse();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Reverse',
            new Reverse()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('reverse', $this->object->getType());
    }
}
