<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupToGroupAddMethodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_to_group_add_method', function (Blueprint $table) {
            $table->id();
            $table->string('groupUUID')->comment('群组UUID');
            $table->string('operation_userUUID')->comment('操作用户UUID');
            $table->string('group_add_method_id')->comment('添加方式id');
            $table->timestamps();
            $table->softDeletes();

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
        Schema::dropIfExists('group_to_group_add_method');
    }
}
