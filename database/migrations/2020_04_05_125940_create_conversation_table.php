<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConversationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversation', function (Blueprint $table) {
            $table->id();
            $table->string('userUUID')->comment('用户UUID');
            $table->integer('type')->comment('类型，群会话，私聊会话');
            $table->string('conversation_object_UUID')->comment('会话对象，用户UUID或者群组UUID');
            $table->string('conversation_object_nickname')->nullable()->comment('会话对象，昵称');
            $table->string('conversation_object_avatar')->nullable()->comment('会话对象，头像');
            $table->text('remark')->nullable()->comment('备注');
            $table->integer('method')->comment('发起会话方式');
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
        Schema::dropIfExists('conversation');
    }
}
