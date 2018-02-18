<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\Tokenizer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer\PathHierarchy;
use PHPUnit\Framework\TestCase;

/**
 * Test for PathHierachy Tokenizer.
 */
class PathHierarchyTest extends TestCase
{
    /**
     * @var PathHierarchy
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new PathHierarchy();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer\PathHierarchy',
            new PathHierarchy()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('path_hierarchy', $this->object->getType());
    }
}
