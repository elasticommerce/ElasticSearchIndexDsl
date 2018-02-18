<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\Tokenizer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer\SimplePattern;
use PHPUnit\Framework\TestCase;

/**
 * Test for SimplePattern Tokenizer.
 */
class SimplePatternTest extends TestCase
{
    /**
     * @var SimplePattern
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new SimplePattern();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer\SimplePattern',
            new SimplePattern()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('simple_pattern', $this->object->getType());
    }
}
