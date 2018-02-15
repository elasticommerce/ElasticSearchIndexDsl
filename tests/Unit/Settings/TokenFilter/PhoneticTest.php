<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Phonetic;
use PHPUnit\Framework\TestCase;

/**
 * Test for Phonetic TokenFilter.
 */
class PhoneticTest extends TestCase
{
    /**
     * @var Phonetic
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Phonetic();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Phonetic',
            new Phonetic()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('phonetic', $this->object->getType());
    }
}
