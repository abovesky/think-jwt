<?php

namespace abovesky;

use think\App;
use abovesky\Exception\JWTException;

class BearerToken
{
    private $request;

    public function __construct(App $app)
    {
        $this->request = $app->request;
    }

    public function getToken()
    {
        $authorization = $this->request->header('authorization');

        if (strpos($authorization, 'Bearer ') !== 0) {
            throw new JWTException('获取Token失败');
        }

        return substr($authorization, 7);
    }
}
