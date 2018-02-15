<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Standard;
use PHPUnit\Framework\TestCase;

/**
 * Test for Standard TokenFilter.
 */
class StandardTest extends TestCase
{
    /**
     * @var Standard
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Standard();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Standard',
            new Standard()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('standard', $this->object->getType());
    }
}
