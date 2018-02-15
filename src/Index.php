<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl;

/**
 * Class Index
 * @package ElastiCommerce\ElasticSearchIndexDsl
 */
class Index
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var IndexSettings
     */
    private $settings;

    /**
     * @var IndexMappings
     */
    private $mappings;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return IndexSettings
     */
    public function getSettings(): IndexSettings
    {
        return $this->settings;
    }

    /**
     * @param IndexSettings $settings
     */
    public function setSettings(IndexSettings $settings)
    {
        $this->settings = $settings;
    }

    /**
     * @return IndexMappings
     */
    public function getMappings(): IndexMappings
    {
        return $this->mappings;
    }

    /**
     * @param IndexMappings $mappings
     */
    public function setMappings(IndexMappings $mappings)
    {
        $this->mappings = $mappings;
    }
}

