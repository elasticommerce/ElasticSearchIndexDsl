<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Elision;
use PHPUnit\Framework\TestCase;

/**
 * Test for Elision TokenFilter.
 */
class ElisionTest extends TestCase
{
    /**
     * @var Elision
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Elision();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Elision',
            new Elision()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('elision', $this->object->getType());
    }
}
