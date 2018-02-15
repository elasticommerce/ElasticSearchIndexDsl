<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\Tokenizer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer\UaxUrlEmail;
use PHPUnit\Framework\TestCase;

/**
 * Test for UaxUrlEmail Tokenizer.
 */
class UaxUrlEmailTest extends TestCase
{
    /**
     * @var UaxUrlEmail
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new UaxUrlEmail();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer\UaxUrlEmail',
            new UaxUrlEmail()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('uax_url_email', $this->object->getType());
    }
}
