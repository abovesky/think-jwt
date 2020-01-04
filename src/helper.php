<?php

use think\facade\Config;

if ('cli' === PHP_SAPI || 'phpdbg' === PHP_SAPI && think_version() === '5.1') {
    \think\Console::addDefaultCommands([
        'jwt:make' => \abovesky\Command\JwtCommand::class,
    ]);
}

if (!function_exists('think_version')) {
    /**
     * 获取TP版本号
     * @return string
     */
    function think_version()
    {
        return substr(app()->version(), 0, 3);
    }
}

if (!function_exists('configx')) {
    /**
     * 获取和设置配置参数
     * @param string|array $name  参数名
     * @param mixed        $value 参数值
     * @return mixed
     */
    function configx($name = '', $value = null)
    {
        if (think_version() === '5.1') {
            if (is_null($value) && is_string($name)) {
                if (false === strpos($name, '.')) {
                    return Config::pull($name);
                }

                return 0 === strpos($name, '?') ? Config::has(substr($name, 1)) : Config::get($name);
            } else {
                return Config::set($name, $value);
            }
        }

        if (is_array($name)) {
            return Config::set($name, $value);
        }

        return 0 === strpos($name, '?') ? Config::has(substr($name, 1)) : Config::get($name, $value);
    }
}
