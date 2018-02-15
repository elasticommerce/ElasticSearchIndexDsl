<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit;

use ElastiCommerce\ElasticSearchIndexDsl\IndexMappings;
use PHPUnit\Framework\TestCase;

/**
 * Test for IndexMappings.
 */
class IndexMappingsTest extends TestCase
{

    public function testItCanBeInstantiated()
    {
        $this->assertInstanceOf('ElastiCommerce\ElasticSearchIndexDsl\IndexMappings', new IndexMappings());
    }
}
