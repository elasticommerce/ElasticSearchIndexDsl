<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\Tokenizer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer\EdgeNgram;
use PHPUnit\Framework\TestCase;

/**
 * Test for EdgeNgram Tokenizer.
 */
class EdgeNgramTest extends TestCase
{
    /**
     * @var EdgeNgram
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new EdgeNgram();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer\EdgeNgram',
            new EdgeNgram()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('edge_ngram', $this->object->getType());
    }
}
