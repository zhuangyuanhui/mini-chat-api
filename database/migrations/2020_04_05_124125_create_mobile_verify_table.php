<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobileVerifyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_verify', function (Blueprint $table) {
            $table->id();
            $table->string('userUUID')->nullable()->comment('用户UUID');
            $table->integer('phone')->comment('手机号码');
            $table->integer('code')->comment('验证码');
            $table->timestamp('valid_time')->comment('有效期');
            $table->integer('type')->comment('类型');
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
        Schema::dropIfExists('mobile_verify');
    }
}
