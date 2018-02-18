<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\CommonGrams;
use PHPUnit\Framework\TestCase;

/**
 * Test for CommonGrams TokenFilter.
 */
class CommonGramsTest extends TestCase
{
    /**
     * @var CommonGrams
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new CommonGrams();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\CommonGrams',
            new CommonGrams()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('common_grams', $this->object->getType());
    }
}
