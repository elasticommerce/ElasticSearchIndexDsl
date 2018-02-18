<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Uppercase;
use PHPUnit\Framework\TestCase;

/**
 * Test for Uppercase TokenFilter.
 */
class UppercaseTest extends TestCase
{
    /**
     * @var Uppercase
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Uppercase();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Uppercase',
            new Uppercase()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('uppercase', $this->object->getType());
    }
}
