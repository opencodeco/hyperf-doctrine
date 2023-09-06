<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf Doctrine.
 *
 * @link     https://github.com/opencodeco/hyperf-doctrine
 * @document https://github.com/opencodeco/hyperf-doctrine/blob/main/README.md
 * @contact  @opencodeco
 * @license  https://github.com/opencodeco/hyperf-doctrine/blob/main/LICENSE
 */
return [
    'connection' => [
        'driverClass' => Hyperf\Doctrine\Driver::class,
        'pool' => 'default',
    ],
    'config' => Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration([__DIR__ . '/../../app/Model'], true, null, null, false),
];
