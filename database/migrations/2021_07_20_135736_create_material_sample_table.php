<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialSampleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_sample', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('matNo')->nullable()->index()->comment('자재업체 고유번호');
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
        Schema::dropIfExists('material_sample');
    }
}
