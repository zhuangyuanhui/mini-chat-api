<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserToFriendAddMethodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_to_friend_add_method', function (Blueprint $table) {
            $table->id();
            $table->string('userUUID')->comment('用户UUID');
            $table->string('friend_add_method_id')->comment('好友添加方式id');
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
        Schema::dropIfExists('user_to_friend_add_method');
    }
}
