<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTokenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_token', function (Blueprint $table) {
            $table->id();
            $table->string('userUUID')->comment('用户UUID');
            $table->integer('type')->comment('使用类型');
            $table->string('token')->comment('用户登录凭证');
            $table->timestamp('valid_time')->nullable()->comment('有效期');
            $table->integer('login_type')->comment('登录方式');
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
        Schema::dropIfExists('user_token');
    }
}
