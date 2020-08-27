<?php

namespace App\Models\Group;

use Illuminate\Database\Eloquent\Model;

class GroupAddPlay extends Model
{
    protected $table = 'group_add_play';

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

    const MODEL_NAME = '申请入群记录';

    /**
     * 允许被赋值的字段
     *
     * @var array
     */
    public $fillable = [
        'groupUUID',
        'userUUID',
        'add_method',
        'apply_time',
        'remark',
        'status',
        'audit_userUUID',
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
