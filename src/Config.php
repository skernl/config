<?php
declare(strict_types=1);

namespace Skernl\Config;

use Skernl\Contract\ConfigInterface;

class Config implements ConfigInterface
{
    static protected array $config;

    public function __construct(array $config)
    {
        self::$config = [] + $config;
    }

    public function get(string $key, mixed $default = null): mixed
    {
    }

    public function has(string $key): bool
    {
    }
}