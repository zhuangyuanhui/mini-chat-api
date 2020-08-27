<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class UserToFriendAddMethod extends Model
{
    protected $table = 'user_to_friend_add_method';

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
    ];

    const MODEL_NAME = '用户设置添加我的方式';

    /**
     * 允许被赋值的字段
     *
     * @var array
     */
    public $fillable = [
        'userUUID',
        'friend_add_method_id',
    ];

    /**
     * 创建时默认值
     *
     * @var array
     */
    protected $attributes = [];
}
