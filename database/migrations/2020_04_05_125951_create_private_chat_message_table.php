<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrivateChatMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('private_chat_message', function (Blueprint $table) {
            $table->id();
            $table->string('conversation_id')->comment('会话id');
            $table->string('userUUID')->comment('用户UUID');
            $table->string('send_userUUID')->comment('发送用户UUID');
            $table->string('content')->comment('发送消息内容');
            $table->string('message_type_id')->comment('消息类型');
            $table->string('status')->comment('状态');
            $table->string('send_time')->comment('发送时间');
            $table->timestamp('withdraw_time')->nullable()->comment('撤回时间');
            $table->timestamps();
            $table->softDeletes();

            $table->index(['userUUID', 'send_userUUID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('private_chat_message');
    }
}
