<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings;

trait CommonsAwareTrait
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $name;

    public function __construct(string $name = '', array $options = [])
    {
        if (false === isVoid($name)) {
            $this->setName($name);
        }
        if (false === isVoid($options)) {
            $this->setOptions($options);
        }
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

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

    /**
     * @param $options
     */
    public function setOptions(array $options = [])
    {
        foreach ($options as $optionName => $optionValue) {
            $this->setDataUsingMethod($optionName, $optionValue);
        }
        return $this;
    }

    /**
     * @return string[]
     */
    public function toSchema(): array
    {
        $output = [];
        $output['type'] = $this->getType();
        foreach ($this->parameters as $parameter) {
            if (true === isVoid($this->getData($parameter)) && false === array_key_exists($parameter, $this->getters)) {
                continue;
            }
            $value = true === array_key_exists($parameter,
                $this->getters) ? $this->{$this->getters[$parameter]}() : $this->getData($parameter);
            if (true === isVoid($value)) {
                continue;
            }
            $output[$parameter] = true === array_key_exists($parameter,
                $this->getters) ? $this->{$this->getters[$parameter]}() : $this->getData($parameter);
        }
        return [$this->getName() => $output];
    }
}
