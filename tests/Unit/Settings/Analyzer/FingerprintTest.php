<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer\Fingerprint;
use PHPUnit\Framework\TestCase;

/**
 * Test for Fingerprint Analyzer.
 */
class FingerprintTest extends TestCase
{

    /**
     * @var Fingerprint
     */
    protected $object;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();
        $this->object = new Fingerprint();
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\Analyzer\Fingerprint',
            new Fingerprint()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('fingerprint', $this->object->getType());
    }

    public function testSetInvalidLanguage()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->object->setStopwordLanguage('foo');
    }

    public function testSetValidLanguage()
    {
        $this->object->setStopwordLanguage('german');
        $this->assertEquals('german', $this->object->getStopwordLanguage());
        $this->object->setStopwordLanguage('greek');
        $this->assertEquals('greek', $this->object->getStopwordLanguage());
    }

    public function testToArrayWithStopwordList()
    {
        $this->object->setName('my_fingerprint');
        $this->object->setStopwords(["and", "is", "the"]);

        $expect = [
            'my_fingerprint' => [
                'type' => 'fingerprint',
                'stopwords' => ["and", "is", "the"]
            ]

        ];
        $this->assertEquals($expect, $this->object->toSchema());
    }

    public function testToArrayWithStopwordLanguage()
    {
        $this->object->setName('my_fingerprint');
        $this->object->setStopwordLanguage('german');

        $expect = [
            'my_fingerprint' => [
                'type' => 'fingerprint',
                'stopwords' => '_german_'
            ]

        ];
        $this->assertEquals($expect, $this->object->toSchema());
    }
}
