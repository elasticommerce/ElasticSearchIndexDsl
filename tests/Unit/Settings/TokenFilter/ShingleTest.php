<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Shingle;
use PHPUnit\Framework\TestCase;

/**
 * Test for Shingle TokenFilter.
 */
class ShingleTest extends TestCase
{
    /**
     * @var Shingle
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Shingle();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Shingle',
            new Shingle()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('shingle', $this->object->getType());
    }
}
