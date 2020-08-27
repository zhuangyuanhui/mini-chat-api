<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicChatMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('public_chat_message', function (Blueprint $table) {
            $table->id();
            $table->string('userUUID')->comment('发送者UUID');
            $table->text('content')->nullable()->comment('消息内容');
            $table->integer('status')->comment('发送状态');
            $table->timestamp('send_time')->comment('发送时间');
            $table->integer('message_type_id')->comment('消息类型外键');
            $table->timestamp('withdraw_time')->nullable()->comment('撤回时间');
            $table->timestamps();
            $table->softDeletes();

            $table->index('userUUID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('public_chat_message');
    }
}
