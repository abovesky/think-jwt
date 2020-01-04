<?php

namespace abovesky\Facade;

use think\Facade;

class Jwt extends Facade
{
    protected static function getFacadeClass()
    {
        if (think_version() === '5.1') {
            return \abovesky\Jwt::class;
        }
        return 'jwt';
    }
}
