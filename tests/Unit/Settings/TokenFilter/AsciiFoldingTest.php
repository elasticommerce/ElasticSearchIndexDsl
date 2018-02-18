<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\AsciiFolding;
use PHPUnit\Framework\TestCase;

/**
 * Test for AsciiFolding TokenFilter.
 */
class AsciiFoldingTest extends TestCase
{
    /**
     * @var AsciiFolding
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new AsciiFolding();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\AsciiFolding',
            new AsciiFolding()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('asciifolding', $this->object->getType());
    }
}
