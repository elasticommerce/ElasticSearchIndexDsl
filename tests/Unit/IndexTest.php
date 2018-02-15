<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Tests\Unit;

use ElastiCommerce\ElasticSearchIndexDsl\Index;
use PHPUnit\Framework\TestCase;

/**
 * Test for Index.
 */
class IndexTest extends TestCase
{

    public function testItCanBeInstantiated()
    {
        $this->assertInstanceOf('ElastiCommerce\ElasticSearchIndexDsl\Index', new Index());
    }
}
