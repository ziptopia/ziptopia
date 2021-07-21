<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnerSampleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner_sample', function (Blueprint $table) {
            $table->bigIncrements('partSpNo')->comment('인테리어 샘플 고유번호');
            $table->bigInteger('partNo')->nullable()->index()->comment('인테리어업체 고유번호');
            $table->string('photo_s')->nullable()->comment('썸네일 이미지 url');
            $table->string('photo_big')->nullable()->comment('샘플이미지 원본 url');
            $table->text('description')->nullable()->comment('상세 설명');
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
        Schema::dropIfExists('partner_sample');
    }
}
