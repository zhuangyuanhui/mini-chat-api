<?php

return [

    // 群组状态
    'status'           => [
        'enabled'  => [1, '启用'],
        'disabled' => [88, '禁用'],
    ],

    // 添加群方式
    'group_add_method' => [
        'friend'   => [1, '好友推荐'],
        'group_no' => [2, '群组号码'],
    ],

    // 入群申请
    'apply' => [
        'status' => [
            'audit' => [1, '待审核'],
            'passed' => [90, '已通过'],
            'rejected' => ['50', '已拒绝'],
        ]
    ]
];

