<?php

return [
    // 单点登录
    'sso'          => true,
    // 缓存标识
    'ssoCacheKey'  => 'jwt-auth-user',
    // 单点登录用户唯一标识
    'ssoKey'       => 'uid',
    // 密钥
    'signerKey'    => '',
    // 时间前不能使用，默认生成后直接使用
    'notBefore'    => 0,
    // Token有效期（秒）
    'expiresAt'    => 3600,
    // 加密算法
    'signer'       => \Lcobucci\JWT\Signer\Hmac\Sha256::class,
    // 获取 Token 途径
    'type'         => 'Bearer',
    // 是否注入用户模型
    'injectUser'   => false,
    // 用户模型
    'userModel'    => '',
    'hasLogged'    => 50401,
    'tokenExpired' => 50402,
];
