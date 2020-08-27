<?php

namespace App\Models\Group;

use Illuminate\Database\Eloquent\Model;

class GroupMessage extends Model
{
    protected $table = 'group_message';

    protected $primaryKey = 'id';

    /**
     * 是否自动维护created_at,updated_at
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * 日期转化格式为Carbon对象
     *
     * @var array
     */
    protected $dates = [
        'send_time',
        'withdraw_time',
    ];

    const MODEL_NAME = '群组消息记录';

    /**
     * 允许被赋值的字段
     *
     * @var array
     */
    public $fillable = [
        'groupUUID',
        'userUUID',
        'content',
        'group_user_nickname',
        'message_type_id',
        'send_time',
        'status',
        'withdraw_time',
    ];

    /**
     * 创建时默认值
     *
     * @var array
     */
    protected $attributes = [
        'status' => 1,
    ];
}
