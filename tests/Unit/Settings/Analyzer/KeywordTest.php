<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer\Keyword;
use PHPUnit\Framework\TestCase;

/**
 * Test for Keyword Analyzer.
 */
class KeywordTest extends TestCase
{

    /**
     * @var Keyword
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Keyword();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer\Keyword',
            new Keyword()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('keyword', $this->object->getType());
    }
}
