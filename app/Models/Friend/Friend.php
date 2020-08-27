<?php

namespace App\Models\Friend;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $table = 'friend';

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
    protected $dates = [
        'add_time'
    ];

    const MODEL_NAME = '好友';

    /**
     * 允许被赋值的字段
     * @var array
     */
    public $fillable = [
        'userUUID',
        'friend_uuid',
        'remark_name',
        'label_list',
        'add_method',
        'add_time',
        'status',
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
