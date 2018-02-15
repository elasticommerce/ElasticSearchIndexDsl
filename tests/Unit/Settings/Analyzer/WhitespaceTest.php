<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer\Whitespace;
use PHPUnit\Framework\TestCase;

/**
 * Test for Whitespace Analyzer.
 */
class WhitespaceTest extends TestCase
{
    /**
     * @var Whitespace
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Whitespace();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer\Whitespace',
            new Whitespace()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('whitespace', $this->object->getType());
    }
}
