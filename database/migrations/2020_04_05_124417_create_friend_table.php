<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friend', function (Blueprint $table) {
            $table->id();
            $table->string('userUUID')->comment('自己的UUID');
            $table->string('friend_uuid')->comment('朋友UUID');
            $table->string('remark_name')->nullable()->comment('备注名称');
            $table->string('label_list')->nullable()->comment('好友所属标签列表');
            $table->integer('add_method')->comment('添加方式');
            $table->timestamp('add_time')->comment('添加时间');
            $table->integer('status')->comment('状态');
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
        Schema::dropIfExists('friend');
    }
}
