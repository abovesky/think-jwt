<?php

namespace abovesky\Exception;

use think\exception\HttpException;

class JWTException extends HttpException
{
    public function __construct(string $message, $statusCode = 500, $code = 0)
    {
        parent::__construct($statusCode, $message, null, [], $code);
    }
}
