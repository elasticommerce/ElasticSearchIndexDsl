<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\WordDelimiter;
use PHPUnit\Framework\TestCase;

/**
 * Test for WordDelimiter TokenFilter.
 */
class WordDelimiterTest extends TestCase
{
    /**
     * @var WordDelimiter
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new WordDelimiter();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\WordDelimiter',
            new WordDelimiter()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('word_delimiter', $this->object->getType());
    }
}
