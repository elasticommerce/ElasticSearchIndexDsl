<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\CharFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\CharFilter\PatternReplace;
use PHPUnit\Framework\TestCase;

/**
 * Test for PatternReplace CharFilter.
 */
class PatternReplaceTest extends TestCase
{
    /**
     * @var PatternReplace
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new PatternReplace();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\CharFilter\PatternReplace',
            new PatternReplace()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('pattern_replace', $this->object->getType());
    }
}
