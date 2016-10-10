<?php
/**
 * @copyright  Copyright (c) 2016, Net Inventors GmbH
 * @category   Shopware
 * @author     hrombach
 */

namespace NetiFacebookSdk\Service;

use Facebook\Facebook;
use NetiFacebookSdk\NetiFacebookSdk;

class FacebookSdkFactory
{
    /**
     * @param array $params - defaults = [
     *                      'app_id' => getenv(static::APP_ID_ENV_NAME),
     *                      'app_secret' => getenv(static::APP_SECRET_ENV_NAME),
     *                      'default_graph_version' => static::DEFAULT_GRAPH_VERSION,
     *                      'enable_beta_mode' => false,
     *                      'http_client_handler' => null,
     *                      'persistent_data_handler' => null,
     *                      'pseudo_random_string_generator' => null,
     *                      'url_detection_handler' => null,
     *                      ]
     *
     * @return Facebook
     * @throws \Exception
     */
    public function createSdk(array $params)
    {
        if (! class_exists('\Facebook\Facebook')) {
            require_once __DIR__ . '/../vendor/facebook/graph-sdk/src/Facebook/autoload.php';
        } elseif (! version_compare(Facebook::VERSION, NetiFacebookSdk::SDK_VERSION, '>=')) {
            throw new \Exception('Facebook SDK is already loaded, but version is incompatible.');
        }

        return new Facebook($params);
    }
}