<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminmember', function (Blueprint $table) {
            $table->unsignedBigInteger('no')->autoIncrement()->comment('일련번호');
            $table->string('email', 100)->comment('이메일/로그인 아이디');
            $table->string('password')->comment('패스워드');
            $table->string('name', 100)->comment('회원이름');
            $table->string('phone', 20)->nullable()->comment('휴대폰');
            $table->string('group')->nullable()->comment('부서');
            $table->smallInteger('level')->nullable()->default(10)->comment('보안등급');
            $table->enum('isUse', array('Y','N'))->nullable()->default('N')->comment('권한승인여부');
            $table->rememberToken();
            $table->timestamp('regdate')->useCurrent();
            $table->timestamp('moddate')->nullable();

            $table->unique('email');
            $table->index('password');
            $table->index('name');
            $table->index('phone');
            $table->index('group');
            $table->index('level');
            $table->index('isUse');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adminauth');
    }
}
