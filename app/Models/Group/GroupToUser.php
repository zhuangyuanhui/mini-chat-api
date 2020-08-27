<?php

namespace App\Models\Group;

use Illuminate\Database\Eloquent\Model;

class GroupToUser extends Model
{
    protected $table = 'group_to_user';

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
        'disable_time',
        'entrance_time',
    ];

    const MODEL_NAME = '群组成员';

    /**
     * 允许被赋值的字段
     *
     * @var array
     */
    public $fillable = [
        'groupUUID',
        'userUUID',
        'user_type',
        'group_user_nickname',
        'status',
        'disable_time',
        'entrance_time',
    ];

    /**
     * 创建时默认值
     *
     * @var array
     */
    protected $attributes = [
        'status' => 1
    ];
}
