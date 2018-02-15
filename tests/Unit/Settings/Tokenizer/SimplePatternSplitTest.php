<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\Tokenizer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer\SimplePatternSplit;
use PHPUnit\Framework\TestCase;

/**
 * Test for SimplePatternSplit Tokenizer.
 */
class SimplePatternSplitTest extends TestCase
{
    /**
     * @var SimplePatternSplit
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new SimplePatternSplit();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer\SimplePatternSplit',
            new SimplePatternSplit()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('simple_pattern_split', $this->object->getType());
    }
}
