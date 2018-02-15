<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\Tokenizer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer\Lowercase;
use PHPUnit\Framework\TestCase;

/**
 * Test for Lowercase Tokenizer.
 */
class LowercaseTest extends TestCase
{
    /**
     * @var Lowercase
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Lowercase();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer\Lowercase',
            new Lowercase()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('lowercase', $this->object->getType());
    }
}
