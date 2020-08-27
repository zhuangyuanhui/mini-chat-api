<?php

namespace App\Models\Group;

use App\Models\User\User;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'group';

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

    const MODEL_NAME = '群组';

    /**
     * 允许被赋值的字段
     * @var array
     */
    public $fillable = [
        'groupUUID',
        'userUUID',
        'name',
        'icon',
        'notice',
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

    /**
     * 获取群主信息
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function owner()
    {
        return $this->hasOne(User::class, 'userUUID', 'userUUID');
    }

    /**
     * 获取群成员列表
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function member()
    {
        return $this->hasMany(User::class, 'userUUID', 'userUUID');
    }

    /**
     * 获取群聊天记录
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function message()
    {
        return $this->hasMany(GroupMessage::class, 'groupUUID', 'groupUUID');
    }
}
