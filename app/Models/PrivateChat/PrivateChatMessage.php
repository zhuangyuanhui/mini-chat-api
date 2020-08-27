<?php

namespace App\Models\PrivateChat;

use Illuminate\Database\Eloquent\Model;

class PrivateChatMessage extends Model
{
    protected $table = 'private_chat_message';

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
        'send_time',
        'withdraw_time',
    ];

    const MODEL_NAME = '私有频道聊天记录';

    /**
     * 允许被赋值的字段
     *
     * @var array
     */
    public $fillable = [
        'userUUID',
        'conversation_id',
        'send_userUUID',
        'content',
        'message_type_id',
        'status',
        'send_time',
        'withdraw_time',
    ];

    /**
     * 创建时默认值
     *
     * @var array
     */
    protected $attributes = [
        'status' => 1
    ];
}
