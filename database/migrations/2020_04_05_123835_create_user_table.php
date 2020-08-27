<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id()->comment('主键');
            $table->string('userUUID')->comment('用户UUID');
            $table->string('account')->comment('用户账号');
            $table->integer('status')->comment('状态');
            $table->integer('login_status')->comment('登录状态');
            $table->integer('type')->comment('类型');
            $table->timestamps();
            $table->softDeletes();

            $table->unique('userUUID');
            $table->unique('account');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
