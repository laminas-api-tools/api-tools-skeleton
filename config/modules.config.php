<?php

/**
 * @see       https://github.com/laminas-api-tools/api-tools-skeleton for the canonical source repository
 * @copyright https://github.com/laminas-api-tools/api-tools-skeleton/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas-api-tools/api-tools-skeleton/blob/master/LICENSE.md New BSD License
 */

/**
 * List of enabled modules for this application.
 */
return [
    'Laminas\Db',
    'Laminas\Filter',
    'Laminas\Hydrator',
    'Laminas\InputFilter',
    'Laminas\Paginator',
    'Laminas\Router',
    'Laminas\Validator',
    'Laminas\ApiTools',
    'Laminas\ApiTools\Documentation',
    'Laminas\ApiTools\ApiProblem',
    'Laminas\ApiTools\Configuration',
    'Laminas\ApiTools\OAuth2',
    'Laminas\ApiTools\MvcAuth',
    'Laminas\ApiTools\Hal',
    'Laminas\ApiTools\ContentNegotiation',
    'Laminas\ApiTools\ContentValidation',
    'Laminas\ApiTools\Rest',
    'Laminas\ApiTools\Rpc',
    'Laminas\ApiTools\Versioning',
    'Application',
];
