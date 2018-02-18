<?php
/**
 * Created by PhpStorm.
 * User: dng
 * Date: 18.02.18
 * Time: 22:48
 */

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings;

interface AnalysisInterface
{

    public function __construct(string $name = '', array $options = []);

    public function setName(string $name);

    public function getName(): string;

    public function getType(): string;

    public function setOptions(array $options = []);
}
