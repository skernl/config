<?php
declare(strict_types=1);

namespace Skernl\Config;

use Skernl\Container\Annotation\Mount;
use Skernl\Contract\ConfigInterface;

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
            'dependencies' => [
                ConfigInterface::class => Config::class,
            ],
        ];
    }
}