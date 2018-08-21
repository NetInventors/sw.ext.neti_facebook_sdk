<?php
/**
 * @copyright  Copyright (c) 2016, Net Inventors GmbH
 * @category   Shopware
 * @author     hrombach
 */

namespace NetiFacebookSdk;

use Shopware\Components\Plugin;
use Shopware\Components\Plugin\Context\InstallContext;

class NetiFacebookSdk extends Plugin
{
    const MINIMUM_SDK_VERSION = '5.6.0';

    const BREAKING_VERSION    = '6.0.0';

    /**
     * @param InstallContext $context
     * @throws \Exception
     */
    public function install(InstallContext $context)
    {
        if (! is_readable(__DIR__ . DIRECTORY_SEPARATOR . 'vendor')) {
            throw new \Exception('Please run "composer install" before you install the plugin!');
        }

        parent::install($context);
    }
}