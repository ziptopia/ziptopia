<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material', function (Blueprint $table) {
            $table->bigIncrements('matNo')->comment('자재업체 고유번호');
            $table->string('email', 100)->unique()->comment('자재업체 이메일/로그인아이디');
            $table->string('password')->comment('패스워드');
            $table->string('owner', 100)->index()->nullable()->comment('대표자명');
            $table->string('company', 100)->index()->nullable()->comment('회사명');
            $table->string('business_num', 20)->index()->nullable()->comment('사업자번호');
            $table->string('owner_phone', 20)->index()->nullable()->comment('대표자 휴대폰');
            $table->string('tel', 20)->index()->nullable()->comment('대표전화');
            $table->string('addr')->index()->nullable()->comment('주소');
            $table->string('photo')->nullable()->comment('대표이미지');
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
        Schema::dropIfExists('material');
    }
}
