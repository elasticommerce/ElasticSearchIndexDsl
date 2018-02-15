<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer\Language;
use PHPUnit\Framework\TestCase;

/**
 * Test for Language Analyzer.
 */
class LanguageTest extends TestCase
{
    /**
     * @var Language
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Language();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer\Language',
            new Language()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('language', $this->object->getType());
    }
}
