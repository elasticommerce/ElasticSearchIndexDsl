<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\CharFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\CharFilter\HtmlStrip;
use PHPUnit\Framework\TestCase;

/**
 * Test for HtmlStrip CharFilter.
 */
class HtmlStripTest extends TestCase
{
    /**
     * @var HtmlStrip
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new HtmlStrip();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\CharFilter\HtmlStrip',
            new HtmlStrip()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('html_strip', $this->object->getType());
    }
}
