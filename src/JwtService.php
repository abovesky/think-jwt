<?php

namespace abovesky;

use abovesky\Command\JwtCommand;

class JwtService extends \think\Service
{
    public function register()
    {
        $this->app->bind('jwt', \abovesky\Jwt::class);
    }

    public function boot()
    {
        $this->commands(JwtCommand::class);
    }
}
