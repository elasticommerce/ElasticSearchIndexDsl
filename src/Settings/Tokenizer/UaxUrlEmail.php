<?php

declare(strict_types=1);

namespace ElastiCommerce\ElasticSearchIndexDsl\Settings\Tokenizer;

use ElastiCommerce\ElasticSearchIndexDsl\Settings\TypeAwareTrait;

class UaxUrlEmail
{
    use TypeAwareTrait;

    const TYPE = 'uax_url_email';

    public function __construct()
    {
        $this->setType(self::TYPE);
    }
}
