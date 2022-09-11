<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience', function (Blueprint $table) {
            $table->increments('store_reviews_id')->comment('投稿番号');
            $table->string('difficulty')->comment('難易度');
            $table->string('time')->comment('所要時間');
            $table->text('review')->comment('楽しみ方');
            $table->integer('del_flg')->comment('削除フラグ')->default(0);
            $table->integer('id')->comment('ユーザーID');
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
        Schema::dropIfExists('experience');
    }
}
