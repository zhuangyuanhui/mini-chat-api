<?php

namespace App\Models\Group;

use Illuminate\Database\Eloquent\Model;

class GroupToGroupAddMethod extends Model
{
    protected $table = 'group_to_group_add_method';

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

    const MODEL_NAME = '群组设置添加我的方式';

    /**
     * 允许被赋值的字段
     *
     * @var array
     */
    public $fillable = [
        'groupUUID',
        'operation_userUUID',
        'group_add_method_id',
    ];

    /**
     * 创建时默认值
     *
     * @var array
     */
    protected $attributes = [];
}
