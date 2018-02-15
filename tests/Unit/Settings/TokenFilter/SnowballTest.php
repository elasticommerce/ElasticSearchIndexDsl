<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Snowball;
use PHPUnit\Framework\TestCase;

/**
 * Test for Snowball TokenFilter.
 */
class SnowballTest extends TestCase
{
    /**
     * @var Snowball
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Snowball();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Snowball',
            new Snowball()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('snowball', $this->object->getType());
    }
}
