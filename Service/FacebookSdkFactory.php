<?php
/**
 * @copyright  Copyright (c) 2016, Net Inventors GmbH
 * @category   Shopware
 * @author     hrombach
 */

namespace NetiFacebookSdk\Service;

use Facebook\Facebook;

class FacebookSdkFactory
{
    public function createSDK(array $params)
    {
        if (! class_exists('\Facebook\Facebook')) {
            require_once __DIR__ . '/../vendor/facebook/graph-sdk/src/Facebook/autoload.php';
        }

        return new Facebook($params);
    }
}