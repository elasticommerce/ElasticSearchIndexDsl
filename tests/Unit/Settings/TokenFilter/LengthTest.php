<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Length;
use PHPUnit\Framework\TestCase;

/**
 * Test for Length TokenFilter.
 */
class LengthTest extends TestCase
{
    /**
     * @var Length
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Length();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Length',
            new Length()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('length', $this->object->getType());
    }
}
