<?php

return [

    // 用户类型
    'type' => [
        'normal' => [1, '普通用户'],
    ],

    // 用户状态
    'status' => [
        'enabled' => [1, '启用'],
        'disabled' => [88, '禁用'],
    ],

    // 添加好友方式
    'friend_add_method' => [
        'phone' => [1, '手机'],
        'group' => [2, '群聊'],
        'user_no' => [3, '用户号码'],
    ],

    'login' => [
        /*
        |--------------------------------------------------------------------------
        | 用户登录后返回的token多久失效（单位：秒）
        |--------------------------------------------------------------------------
        |
        | 系统中每验证一次token会先获取该token的最后活动时间，
        | 如 当前时间 - 最后活动时间 大于 该值，则token失效
        | 否则更新token的最后活动时间为当前时间
        |
        */
        'token_expiry' => 15 * 86400,

        // 密码加密类型
        'pwd_type' => [
            'password_hash' => 1,
        ],

        // 登录类型
        'type' => [
            'phone' => [1, '手机号码登录'],
            'mail' => [2, '邮箱登录'],
            'nickname' => [3, '用户名登录'],
        ],
    ],

    'apply' => [
        'status' => [
            'audit' => [1, '待审核'],
            'passed' => [90, '已通过'],
            'rejected' => ['50', '已拒绝']
        ]
    ]
];

