<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group', function (Blueprint $table) {
            $table->id();
            $table->string('groupUUID')->comment('群组UUID');
            $table->string('userUUID')->comment('群主UUID');
            $table->string('name')->comment('群组名称');
            $table->string('icon')->nullable()->comment('群组图标');
            $table->string('notice')->nullable()->comment('群组公告');
            $table->string('intro')->nullable()->comment('群组简介');
            $table->string('status')->nullable()->comment('状态');
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
        Schema::dropIfExists('group');
    }
}
