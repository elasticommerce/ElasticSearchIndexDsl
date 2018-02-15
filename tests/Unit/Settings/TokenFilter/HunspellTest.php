<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Hunspell;
use PHPUnit\Framework\TestCase;

/**
 * Test for Hunspell TokenFilter.
 */
class HunspellTest extends TestCase
{
    /**
     * @var Hunspell
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Hunspell();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Hunspell',
            new Hunspell()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('hunspell', $this->object->getType());
    }
}
