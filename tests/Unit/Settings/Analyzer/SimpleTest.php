<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer\Simple;
use PHPUnit\Framework\TestCase;

/**
 * Test for Simple Analyzer.
 */
class SimpleTest extends TestCase
{
    /**
     * @var Simple
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Simple();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer\Simple',
            new Simple()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('simple', $this->object->getType());
    }
}
