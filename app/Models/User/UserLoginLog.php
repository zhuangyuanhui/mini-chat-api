<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class UserLoginLog extends Model
{
    protected $table = 'user_login_log';

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
    protected $dates = ['login_time'];

    const MODEL_NAME = '用户登录历史';

    /**
     * 允许被赋值的字段
     * @var array
     */
    public $fillable = [
        'userUUID',
        'login_type',
        'login_time',
        'ip',
    ];

    /**
     * 创建时默认值
     *
     * @var array
     */
    protected $attributes = [];
}
