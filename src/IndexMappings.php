<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl;

/**
 * Class Index
 * @package ElastiCommerce\ElasticSearchIndexDsl
 */
class IndexMappings
{
    private $name = null;

    public function hasName(){
        return true !== empty($this->name);
    }
}