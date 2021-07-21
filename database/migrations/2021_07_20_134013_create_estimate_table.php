<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstimateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estimate', function (Blueprint $table) {
            $table->bigIncrements('estNo')->comment('견적요청 고유번호');
            $table->bigInteger('no')->index()->comment('소비자 고유번호');
            $table->string('title')->index()->comment('견적요청 제목');
            $table->string('name',100)->index()->comment('견적요청자 이름');
            $table->text('question')->comment('견적요청 내용');
            $table->unsignedSmallInteger('state')->default(0)->comment('견적진행 상태 진행중:0, 답변완료:1');
            $table->text('answer')->nullable()->comment('답변내용');
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
        Schema::dropIfExists('estimate');
    }
}
