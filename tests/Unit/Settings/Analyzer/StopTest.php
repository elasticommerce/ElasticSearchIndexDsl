<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer\Stop;
use PHPUnit\Framework\TestCase;

/**
 * Test for Stop Analyzer.
 */
class StopTest extends TestCase
{
    /**
     * @var Stop
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Stop();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer\Stop',
            new Stop()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('stop', $this->object->getType());
    }

    public function testToArrayWithStopwordList()
    {
        $this->object->setName('my_stop');
        $this->object->setStopwords(["and", "is", "the"]);

        $expect = [
            'my_stop' => [
                'type' => 'stop',
                'stopwords' => ["and", "is", "the"]
            ]

        ];
        $this->assertEquals($expect, $this->object->toSchema());
    }

    public function testToArrayWithStopwordLanguage()
    {
        $this->object->setName('my_stop');
        $this->object->setStopwordLanguage('german');

        $expect = [
            'my_stop' => [
                'type' => 'stop',
                'stopwords' => '_german_'
            ]

        ];
        $this->assertEquals($expect, $this->object->toSchema());
    }
}
