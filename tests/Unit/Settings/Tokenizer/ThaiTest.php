<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\Tokenizer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer\Thai;
use PHPUnit\Framework\TestCase;

/**
 * Test for Thai Tokenizer.
 */
class ThaiTest extends TestCase
{
    /**
     * @var Thai
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Thai();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer\Thai',
            new Thai()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('thai', $this->object->getType());
    }
}
