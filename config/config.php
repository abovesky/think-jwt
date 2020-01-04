<?php

return [
    // 单点登录
    'sso' => true,
    // 缓存标识
    'sso_cache_key' => 'jwt-auth-user',
    // 单点登录用户唯一标识
    'sso_key' => 'uid',
    // 密钥
    'signer_key' => '',
    // 时间前不能使用，默认生成后直接使用
    'not_before' => 0,
    // Token有效期（秒）
    'expires_at' => 3600,
    // 加密算法
    'signer' => \Lcobucci\JWT\Signer\Hmac\Sha256::class,

    'claims' => [
        'iss' => '',
        'aud' => '',
    ],
    // 注入用户模型
    'inject_user' => false,
    // 用户模型
    'user_model' => '',
];
