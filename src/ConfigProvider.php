<?php
declare(strict_types=1);

namespace Skernl\Config;

use Skernl\Contract\ConfigInterface;
use Skernl\Di\Annotation\Mount;

/**
 * @ConfigProvider
 * @\Skernl\Config\ConfigProvider
 */
#[Mount]
class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            ConfigInterface::class => Config::class,
        ];
    }
}