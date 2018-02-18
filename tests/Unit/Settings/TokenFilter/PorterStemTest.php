<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\PorterStem;
use PHPUnit\Framework\TestCase;

/**
 * Test for PorterStem TokenFilter.
 */
class PorterStemTest extends TestCase
{
    /**
     * @var PorterStem
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new PorterStem();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\PorterStem',
            new PorterStem()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('porter_stem', $this->object->getType());
    }
}
