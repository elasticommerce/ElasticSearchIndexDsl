<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\Tokenizer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer\Classic;
use PHPUnit\Framework\TestCase;

/**
 * Test for Classic Tokenizer.
 */
class ClassicTest extends TestCase
{
    /**
     * @var Classic
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Classic();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer\Classic',
            new Classic()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('classic', $this->object->getType());
    }
}
