<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Ngram;
use PHPUnit\Framework\TestCase;

/**
 * Test for Ngram TokenFilter.
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Ngram',
            new Ngram()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('nGram', $this->object->getType());
    }
}
