<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Synonym;
use PHPUnit\Framework\TestCase;

/**
 * Test for Synonym TokenFilter.
 */
class SynonymTest extends TestCase
{
    /**
     * @var Synonym
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Synonym();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Synonym',
            new Synonym()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('synonym', $this->object->getType());
    }
}
