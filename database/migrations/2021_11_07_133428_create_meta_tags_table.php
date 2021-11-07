<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetaTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meta_tags', function (Blueprint $table) {
            $table->id();
            // MORPH
            $table->unsignedBigInteger('taggable_id');
            $table->string('taggable_type', 100);
            // META TAGS
            $table->string('meta_title', 150)->nullable();
            $table->string('meta_description', 255)->nullable();
            $table->string('meta_keywords', 255)->nullable();
            // OG TAGS
            $table->string('og_title',150)->nullable();
            $table->string('og_url',200)->nullable();
            $table->string('og_type',50)->nullable();
            $table->string('og_image',255)->nullable();
            // Twitter Tags
            $table->string('twitter_title',255)->nullable();
//            $table->string('twitter-site',255)->nullable();
            $table->string('twitter_card',255)->nullable();
            $table->string('twitter_image_src',255)->nullable();
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
        Schema::dropIfExists('meta_tags');
    }
}
