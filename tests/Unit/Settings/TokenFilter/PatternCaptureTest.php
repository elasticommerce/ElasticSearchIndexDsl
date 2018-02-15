<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\PatternCapture;
use PHPUnit\Framework\TestCase;

/**
 * Test for PatternCapture TokenFilter.
 */
class PatternCaptureTest extends TestCase
{
    /**
     * @var PatternCapture
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new PatternCapture();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\PatternCapture',
            new PatternCapture()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('pattern_capture', $this->object->getType());
    }
}
