<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings;

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\MockObject\MockObject;
use \PHPUnit_Framework_MockObject_MockObject;

/**
 * Test for NameAwareTraitTest.
 */
class NameAwareTraitTest extends TestCase
{
    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|PHPUnit_Framework_MockObject_MockObject
     */
    private $object;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        $this->object = $this->getMockForTrait('ElastiCommerce\ElasticSearchIndexDsl\Settings\NameAwareTrait');
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown()
    {
        $this->object = null;
        parent::tearDown();
    }

    public function testGetAndAddParameter()
    {
        $this->object->setName('foo');
        $this->assertEquals('foo', $this->object->getName());
        $this->object->setName('bar');
        $this->assertEquals('bar', $this->object->getName());
    }
}
