<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\Tokenizer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer\Letter;
use PHPUnit\Framework\TestCase;

/**
 * Test for Letter Tokenizer.
 */
class LetterTest extends TestCase
{
    /**
     * @var Letter
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Letter();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer\Letter',
            new Letter()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('letter', $this->object->getType());
    }
}
