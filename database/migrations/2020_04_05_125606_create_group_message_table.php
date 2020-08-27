<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_message', function (Blueprint $table) {
            $table->id();
            $table->string('groupUUID')->comment('群组UUID');
            $table->string('userUUID')->comment('用户UUID');
            $table->text('content')->comment('消息内容');
            $table->string('group_user_nickname')->nullable()->comment('用户在群昵称');
            $table->integer('message_type_id')->comment('消息类型');
            $table->timestamp('send_time')->comment('发送时间');
            $table->integer('status')->comment('状态');
            $table->timestamp('withdraw_time')->nullable()->comment('撤回时间');
            $table->timestamps();
            $table->softDeletes();

            $table->index(['groupUUID', 'userUUID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_message');
    }
}
