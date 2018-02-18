<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Unique;
use PHPUnit\Framework\TestCase;

/**
 * Test for Unique TokenFilter.
 */
class UniqueTest extends TestCase
{
    /**
     * @var Unique
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Unique();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Unique',
            new Unique()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('unique', $this->object->getType());
    }
}
