<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\KeywordRepeat;
use PHPUnit\Framework\TestCase;

/**
 * Test for KeywordRepeat TokenFilter.
 */
class KeywordRepeatTest extends TestCase
{
    /**
     * @var KeywordRepeat
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new KeywordRepeat();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\KeywordRepeat',
            new KeywordRepeat()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('keyword_repeat', $this->object->getType());
    }
}
