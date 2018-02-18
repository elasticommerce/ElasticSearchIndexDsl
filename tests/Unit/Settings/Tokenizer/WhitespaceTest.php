<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\Tokenizer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer\Whitespace;
use PHPUnit\Framework\TestCase;

/**
 * Test for Whitespace Tokenizer.
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer\Whitespace',
            new Whitespace()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('whitespace', $this->object->getType());
    }
}
