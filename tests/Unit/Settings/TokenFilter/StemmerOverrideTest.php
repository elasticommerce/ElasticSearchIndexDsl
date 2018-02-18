<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\StemmerOverride;
use PHPUnit\Framework\TestCase;

/**
 * Test for StemmerOverride TokenFilter.
 */
class StemmerOverrideTest extends TestCase
{
    /**
     * @var StemmerOverride
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new StemmerOverride();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\StemmerOverride',
            new StemmerOverride()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('stemmer_override', $this->object->getType());
    }
}
