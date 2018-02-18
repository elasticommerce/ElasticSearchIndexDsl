<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\Tokenizer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer\Pattern;
use PHPUnit\Framework\TestCase;

/**
 * Test for PathHierachy Tokenizer.
 */
class PatternTest extends TestCase
{
    /**
     * @var Pattern
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Pattern();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer\Pattern',
            new Pattern()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('pattern', $this->object->getType());
    }
}
