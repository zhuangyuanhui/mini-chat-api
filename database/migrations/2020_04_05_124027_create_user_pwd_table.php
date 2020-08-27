<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPwdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_pwd', function (Blueprint $table) {
            $table->id();
            $table->string('userUUID')->comment('用户UUID');
            $table->string('pwd')->comment('密码');
            $table->integer('is_now')->comment('是否当前密码');
            $table->integer('strength')->comment('密码强度');
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
        Schema::dropIfExists('user_pwd');
    }
}
