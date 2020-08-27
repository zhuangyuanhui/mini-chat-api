<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupAddPlayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_add_play', function (Blueprint $table) {
            $table->id();
            $table->string('userUUID')->comment('用户UUID');
            $table->string('groupUUID')->comment('群组UUID');
            $table->integer('add_method')->comment('添加方式');
            $table->timestamp('apply_time')->comment('申请时间');
            $table->text('remark')->nullable()->comment('添加备注');
            $table->integer('status')->comment('状态');
            $table->string('audit_userUUID')->nullable()->comment('审核人UUID');
            $table->timestamp('pass_time')->nullable()->comment('通过时间');
            $table->timestamp('reject_time')->nullable()->comment('拒绝时间');
            $table->string('reject_remark')->nullable()->comment('拒绝理由');
            $table->timestamps();
            $table->softDeletes();

            $table->index('userUUID');
            $table->index('groupUUID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_add_play');
    }
}
