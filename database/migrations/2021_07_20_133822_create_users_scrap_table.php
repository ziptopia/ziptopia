<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersScrapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_scrap', function (Blueprint $table) {
            $table->bigIncrements('sNo')->comment('스크랩 고유번호');
            $table->bigInteger('id')->nullable()->comment('소비자 고유번호');
            $table->bigInteger('partSpNo')->index()->comment('인테리어샘플 고유번호');
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
        Schema::dropIfExists('users_scrap');
    }
}
