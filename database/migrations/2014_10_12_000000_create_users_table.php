<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->comment('일련번호');
            $table->string('name', 100)->comment('회원이름');
            $table->string('email', 100)->unique()->comment('이메일/로그인 아이디');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->comment('패스워드');
            $table->string('naver_id', 100)->nullable()->comment('네이버 아이디');
            $table->string('kakao_id', 100)->nullable()->comment('카카오 아이디');
            $table->string('google_id', 100)->nullable()->comment('구글 아이디');
            $table->string('phone', 20)->nullable()->comment('휴대폰');
            $table->string('address')->nullable()->comment('주소');
            $table->text('agree')->nullable()->comment('각종 동의 여부');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
