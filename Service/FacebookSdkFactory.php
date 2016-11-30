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
     * @var Facebook
     */
    private static $sdk;

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
        if (! (static::$sdk instanceof Facebook)) {
            if (! class_exists('\Facebook\Facebook')) {
                require_once __DIR__ . '/../vendor/facebook/graph-sdk/src/Facebook/autoload.php';
            } elseif (
                version_compare(Facebook::VERSION, NetiFacebookSdk::MINIMUM_SDK_VERSION, '<') ||
                version_compare(Facebook::VERSION, NetiFacebookSdk::BREAKING_VERSION, '>=')
            ) {
                throw new \Exception(
                    sprintf(
                        'Facebook SDK is already loaded, but found version %s is incompatible with required minimum version %s.',
                        Facebook::VERSION,
                        NetiFacebookSdk::MINIMUM_SDK_VERSION)
                );
            }

            static::$sdk = new Facebook($params);
        }

        return static::$sdk;
    }
}