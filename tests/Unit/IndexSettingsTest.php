<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit;

use ElastiCommerce\ElasticSearchIndexDsl\IndexSettings;
use PHPUnit\Framework\TestCase;

/**
 * Test for IndexSettings.
 */
class IndexSettingsTest extends TestCase
{

    public function testItCanBeInstantiated()
    {
        $this->assertInstanceOf('ElastiCommerce\ElasticSearchIndexDsl\IndexSettings', new IndexSettings());
    }
}
