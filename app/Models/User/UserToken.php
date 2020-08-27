<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class UserToken extends Model
{
    protected $table = 'user_token';

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
    protected $dates = ['valid_time'];

    const MODEL_NAME = '用户登陆后凭证';

    /**
     * 允许被赋值的字段
     * @var array
     */
    public $fillable = [
        'userUUID',
        'type',
        'token',
        'valid_time',
        'login_type',
    ];

    /**
     * 创建时默认值
     *
     * @var array
     */
    protected $attributes = [];
}
