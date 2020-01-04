<?php

namespace abovesky\Facade;

use think\Facade;

class Jwt extends Facade
{
    protected static function getFacadeClass()
    {
        if (substr(app()->version(), 0 , 3) === '5.1') {
            return \abovesky\Jwt::class;
        }
        return 'jwt';
    }
}
