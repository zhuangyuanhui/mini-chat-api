<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $table = 'user_info';

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

    ];

    const MODEL_NAME = '用户详细信息';

    /**
     * 允许被赋值的字段
     * @var array
     */
    public $fillable = [
        'userUUID',
        'nickname',
        'sex',
        'age',
        'birthday',
        'phone',
        'signature',
        'name',
        'email',
        'intro',
        'head_portrait',
    ];

    /**
     * 归属于用户
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'userUUID', 'userUUID');
    }
}
