<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\KStem;
use PHPUnit\Framework\TestCase;

/**
 * Test for KStem TokenFilter.
 */
class KStemTest extends TestCase
{
    /**
     * @var KStem
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new KStem();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\KStem',
            new KStem()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('kstem', $this->object->getType());
    }
}
