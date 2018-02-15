<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Trim;
use PHPUnit\Framework\TestCase;

/**
 * Test for Trim TokenFilter.
 */
class TrimTest extends TestCase
{
    /**
     * @var Trim
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Trim();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Trim',
            new Trim()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('trim', $this->object->getType());
    }
}
