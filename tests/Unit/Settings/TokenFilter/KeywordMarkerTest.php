<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\KeywordMarker;
use PHPUnit\Framework\TestCase;

/**
 * Test for KeywordMarker TokenFilter.
 */
class KeywordMarkerTest extends TestCase
{
    /**
     * @var KeywordMarker
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new KeywordMarker();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\KeywordMarker',
            new KeywordMarker()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('keyword_marker', $this->object->getType());
    }
}
