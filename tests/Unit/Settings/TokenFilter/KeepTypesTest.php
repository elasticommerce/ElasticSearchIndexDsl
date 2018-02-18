<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\KeepTypes;
use PHPUnit\Framework\TestCase;

/**
 * Test for KeepTypes TokenFilter.
 */
class KeepTypesTest extends TestCase
{
    /**
     * @var KeepTypes
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new KeepTypes();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\KeepTypes',
            new KeepTypes()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('keep_types', $this->object->getType());
    }
}
