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

namespace Hyperf\Doctrine;

use Doctrine\DBAL\Driver\AbstractMySQLDriver;
use Doctrine\DBAL\Driver\Connection as ConnectionInterface;
use Hyperf\DB\DB;

final class Driver extends AbstractMySQLDriver
{
    /**
     * @param array{pool?: string} $params
     */
    public function connect(array $params): ConnectionInterface
    {
        return new Connection(DB::connection($params['pool'] ?? 'default'));
    }
}
