<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings;

use PHPUnit\Framework\TestCase;

/**
 * Test for CommonAwareTrait.
 */
class CommonAwareTraitTest extends TestCase
{
    /**
     * @var \PHPUnit\Framework\MockObject\MockObject
     */
    private $object;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        $this->object = $this->getMockForTrait(
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\CommonsAwareTrait'
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown()
    {
        $this->object = null;
        parent::tearDown();
    }

    public function testSetName()
    {
        $this->object->setName('foo');
        $this->assertEquals('foo', $this->object->getName());
        $this->object->setName('bar');
        $this->assertEquals('bar', $this->object->getName());
    }
}
