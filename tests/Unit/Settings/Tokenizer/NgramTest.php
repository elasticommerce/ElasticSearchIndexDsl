<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\Tokenizer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer\Ngram;
use PHPUnit\Framework\TestCase;

/**
 * Test for Ngram Tokenizer.
 */
class NgramTest extends TestCase
{
    /**
     * @var Ngram
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Ngram();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer\Ngram',
            new Ngram()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('ngram', $this->object->getType());
    }
}
