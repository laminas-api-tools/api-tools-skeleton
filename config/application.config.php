<?php

/**
 * @see       https://github.com/laminas-api-tools/api-tools-skeleton for the canonical source repository
 * @copyright https://github.com/laminas-api-tools/api-tools-skeleton/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas-api-tools/api-tools-skeleton/blob/master/LICENSE.md New BSD License
 */

return array(
    // This should be an array of module namespaces used in the application.
    'modules' => array(
        'Application',
        'Laminas\DevelopmentMode',
        'Laminas\ApiTools',
        'Laminas\ApiTools\Provider',
        'Laminas\ApiTools\Documentation',
        'AssetManager',
        'Laminas\ApiTools\ApiProblem',
        'Laminas\ApiTools\Configuration',
        'Laminas\ApiTools\MvcAuth',
        'Laminas\ApiTools\OAuth2',
        'Laminas\ApiTools\Hal',
        'Laminas\ApiTools\ContentNegotiation',
        'Laminas\ApiTools\ContentValidation',
        'Laminas\ApiTools\Rest',
        'Laminas\ApiTools\Rpc',
        'Laminas\ApiTools\Versioning',
    ),
    // This should be an array of paths in which modules reside.
    // If a string key is provided, the listener will consider that a module
    // namespace, the value of that key the specific path to that module's
    // Module class.
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor'
        ),
        // Using __DIR__ to ensure cross-platform compatibility. Some platforms --
        // e.g., IBM i -- have problems with globs that are not qualified.
        'config_glob_paths' => array(realpath(__DIR__) . '/autoload/{,*.}{global,local}.php'),
        'config_cache_key' => 'application.config.cache',
        'config_cache_enabled' => true,
        'module_map_cache_key' => 'application.module.cache',
        'module_map_cache_enabled' => true,
        'cache_dir' => 'data/cache/',
    )
);
