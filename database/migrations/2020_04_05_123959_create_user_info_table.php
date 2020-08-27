<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_info', function (Blueprint $table) {
            $table->id();
            $table->string('userUUID')->comment('用户UUID');
            $table->string('nickname')->comment('昵称');
            $table->integer('sex')->nullable()->comment('性别');
            $table->integer('age')->nullable()->comment('年龄');
            $table->date('birthday')->nullable()->comment('生日');
            $table->integer('phone')->nullable()->nullable()->comment('手机号码');
            $table->string('signature')->nullable()->comment('个性签名');
            $table->string('name')->nullable()->comment('姓名');
            $table->string('email')->nullable()->comment('邮箱');
            $table->text('intro')->nullable()->comment('简介');
            $table->string('head_portrait')->nullable()->comment('头像');
            $table->timestamps();
            $table->softDeletes();

            $table->unique('userUUID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_info');
    }
}
