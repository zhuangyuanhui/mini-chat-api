<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MobileVerify extends Model
{
    protected $table = 'mobile_verify';

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

    const MODEL_NAME = '手机验证码';

    /**
     * 允许被赋值的字段
     * @var array
     */
    public $fillable = [
        'userUUID',
        'phone',
        'code',
        'valid_time',
        'type',
    ];

    /**
     * 创建时默认值
     *
     * @var array
     */
    protected $attributes = [];
}
