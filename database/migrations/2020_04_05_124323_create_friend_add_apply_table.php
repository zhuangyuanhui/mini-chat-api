<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendAddApplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friend_add_apply', function (Blueprint $table) {
            $table->id();
            $table->string('userUUID')->comment('被添加者UUID');
            $table->string('apply_user_uuid')->comment('申请者UUID');
            $table->integer('add_type')->comment('添加方式');
            $table->string('remark')->nullable()->comment('备注');
            $table->integer('status')->comment('状态');
            $table->timestamp('apply_time')->comment('申请时间');
            $table->timestamp('pass_time')->nullable()->comment('通过时间');
            $table->timestamp('reject_time')->nullable()->comment('拒绝时间');
            $table->string('reject_remark')->nullable()->comment('拒绝理由');
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
        Schema::dropIfExists('friend_add_apply');
    }
}
