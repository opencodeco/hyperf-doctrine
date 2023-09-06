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

namespace HyperfTest;

use Hyperf\Doctrine\ConfigProvider;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @covers \Hyperf\Doctrine\ConfigProvider
 */
final class ConfigProviderTest extends TestCase
{
    private ConfigProvider $configProvider;

    protected function setUp(): void
    {
        $this->configProvider = new ConfigProvider();
    }

    public function testInvoke(): void
    {
        $actual = ($this->configProvider)();
        self::assertIsArray($actual);
    }
}
