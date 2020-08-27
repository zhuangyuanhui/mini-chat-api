<?php

namespace App\Models\PublicChat;

use Illuminate\Database\Eloquent\Model;

class PublicChatMessage extends Model
{
    protected $table = 'public_chat_message';

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

    const MODEL_NAME = '公共频道聊天记录';

    /**
     * 允许被赋值的字段
     *
     * @var array
     */
    public $fillable = [
        'userUUID',
        'content',
        'status',
        'send_time',
        'message_type_id',
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
