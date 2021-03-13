<?php

/**
 * @see       https://github.com/laminas-api-tools/api-tools-skeleton for the canonical source repository
 * @copyright https://github.com/laminas-api-tools/api-tools-skeleton/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas-api-tools/api-tools-skeleton/blob/master/LICENSE.md New BSD License
 */

use Laminas\ApiTools\Admin\Model\ModulePathSpec;

return [
    'view_manager'            => [
        'display_exceptions' => true,
    ],
    'api-tools-admin'         => [
        'path_spec' => ModulePathSpec::PSR_4,
    ],
    'api-tools-configuration' => [
        'enable_short_array' => true,
        'class_name_scalars' => true,
    ],
];
