<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class UserPwd extends Model
{
    protected $table = 'user_pwd';

    protected $primaryKey = 'id';

    /**
     * 是否自动维护created_at,updated_at
     * @var bool
     */
    public $timestamps = true;

    /**
     * 日期转化格式为Carbon对象
     * @var array
     */
    protected $dates = [];

    const MODEL_NAME = '用户密码';

    /**
     * 允许被赋值的字段
     * @var array
     */
    public $fillable = [
        'userUUID',
        'pwd',
        'is_now',
        'strength',
    ];

    /**
     * 创建时默认值
     *
     * @var array
     */
    protected $attributes = [];
}
