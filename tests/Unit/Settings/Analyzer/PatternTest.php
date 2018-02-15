<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer\Pattern;
use PHPUnit\Framework\TestCase;

/**
 * Test for Pattern Analyzer.
 */
class PatternTest extends TestCase
{
    /**
     * @var Pattern
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Pattern();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer\Pattern',
            new Pattern()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('pattern', $this->object->getType());
    }
}
