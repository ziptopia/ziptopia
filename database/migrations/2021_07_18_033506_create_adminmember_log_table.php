<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminMemberLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adminmember_log', function (Blueprint $table) {
            $table->unsignedBigInteger('MoNo')->autoIncrement()->comment('일련번호');
            $table->unsignedBigInteger('no')->nullable()->comment('customauth.cNo');
            $table->text('log')->nullable()->comment('관리자정보 수정 내역');
            $table->timestamp('MoRegDate')->useCurrent();

            $table->index('no');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adminmember_log');
    }
}
