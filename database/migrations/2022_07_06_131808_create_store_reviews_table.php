<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_reviews', function (Blueprint $table) {
            $table->increments('store_reviews_id')->comment('投稿番号');
            $table->string('store_name')->comment('店舗名');
            $table->string('place')->comment('場所');
            $table->string('regular')->comment('常連');
            $table->string('TV')->comment('テレビ');
            $table->string('temperature')->comment('室内温度');
            $table->string('water_temperature')->comment('水風呂温度');
            $table->string('width')->comment('広さ');
            $table->string('smell')->comment('匂い');
            $table->string('congestion')->comment('混雑度');
            $table->string('outside_bath')->comment('外気浴');
            $table->string('music')->comment('音楽');
            $table->string('mat')->comment('サウナマット');
            $table->string('cleanliness')->comment('清潔度');
            $table->string('age group')->comment('年齢層');
            $table->text('review')->comment('口コミ');
            $table->integer('del_flg')->comment('削除フラグ')->default(0);
            $table->string('id')->comment('ユーザーID');
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
        Schema::dropIfExists('store_reviews');
    }
}
