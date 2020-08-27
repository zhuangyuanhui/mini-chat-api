<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_to_user', function (Blueprint $table) {
            $table->id();
            $table->string('groupUUID')->comment('群组UUID');
            $table->string('userUUID')->comment('用户UUID');
            $table->integer('user_type')->comment('用户在群类型,群主 管理员 普通群员');
            $table->string('group_user_nickname')->nullable()->comment('用户在群昵称');
            $table->integer('status')->comment('状态');
            $table->timestamp('disable_time')->nullable()->comment('禁言截止时间');
            $table->timestamp('entrance_time')->default(now())->comment('进群时间');
            $table->timestamps();
            $table->softDeletes();

            $table->index('groupUUID');
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
        Schema::dropIfExists('group_to_user');
    }
}
