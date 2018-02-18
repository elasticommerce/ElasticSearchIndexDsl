<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Stemmer;
use PHPUnit\Framework\TestCase;

/**
 * Test for Stemmer TokenFilter.
 */
class StemmerTest extends TestCase
{
    /**
     * @var Stemmer
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Stemmer();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Stemmer',
            new Stemmer()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('stemmer', $this->object->getType());
    }
}
