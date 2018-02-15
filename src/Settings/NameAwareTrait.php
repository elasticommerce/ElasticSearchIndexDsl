<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings;

trait NameAwareTrait
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $type
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }
}
