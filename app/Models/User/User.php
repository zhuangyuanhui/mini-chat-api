<?php

namespace App\Models\User;

use App\Models\Conversation\Conversation;
use App\Models\Friend\Friend;
use App\Models\Group\Group;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';

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

    const MODEL_NAME = '用户';

    /**
     * 允许被赋值的字段
     * @var array
     */
    public $fillable = [
        'userUUID',
        'account',
        'status',
        'login_status',
        'type',
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
     * 获取用户详细信息
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function userInfo()
    {
        return $this->hasOne(UserInfo::class, 'userUUID', 'userUUID');
    }

    /**
     * 获取用户当前密码
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function pwd()
    {
        return $this->hasOne(UserPwd::class, 'userUUID', 'userUUID')->where('is_now', 1);
    }

    /**
     * 获取用户使用密码历史
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pwdLogs()
    {
        return $this->hasMany(UserPwd::class, 'userUUID', 'userUUID')->where('is_now', 0);
    }

    /**
     * 获取用户的所有群，群主身份
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function groups()
    {
        return $this->hasMany(Group::class, 'userUUID', 'userUUID');
    }

    /**
     * 获取用户的好友列表
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function friends()
    {
        return $this->hasMany(Friend::class, 'userUUID', 'userUUID');
    }

    /**
     * 获取用户的标签列表
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function labels()
    {
        return $this->hasMany(UserLabel::class, 'userUUID', 'userUUID');
    }

    /**
     * 获取用户的会话列表
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function conversations()
    {
        return $this->hasMany(Conversation::class, 'userUUID', 'userUUID');
    }



}
