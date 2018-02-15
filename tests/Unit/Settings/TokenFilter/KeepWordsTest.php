<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\KeepWords;
use PHPUnit\Framework\TestCase;

/**
 * Test for KeepWords TokenFilter.
 */
class KeepWordsTest extends TestCase
{
    /**
     * @var KeepWords
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new KeepWords();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\KeepWords',
            new KeepWords()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('keep', $this->object->getType());
    }
}
