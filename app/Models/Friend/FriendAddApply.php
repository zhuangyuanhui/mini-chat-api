<?php

namespace App\Models\Friend;

use Illuminate\Database\Eloquent\Model;

class FriendAddApply extends Model
{
    protected $table = 'friend_add_apply';

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
        'apply_time',
        'pass_time',
        'reject_time',
    ];

    const MODEL_NAME = '好友申请记录';

    /**
     * 允许被赋值的字段
     *
     * @var array
     */
    public $fillable = [
        'userUUID',
        'apply_user_uuid',
        'add_type',
        'remark',
        'status',
        'apply_time',
        'pass_time',
        'reject_time',
        'reject_remark',
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
