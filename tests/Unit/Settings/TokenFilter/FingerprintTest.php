<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit\Settings\TokenFilter;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Fingerprint;
use PHPUnit\Framework\TestCase;

/**
 * Test for Fingerprint TokenFilter.
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
            'ElastiCommerce\ElasticSearchIndexDsl\Settings\TokenFilter\Fingerprint',
            new Fingerprint()
        );
    }

    public function testTypeIsMatching()
    {
        $this->assertEquals('fingerprint', $this->object->getType());
    }
}
