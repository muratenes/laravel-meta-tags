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
            $table->string('title', 150)->nullable();
            $table->string('description', 255)->nullable();
            $table->string('keywords', 255)->nullable();
            // OG TAGS
            $table->string('og-title',150)->nullable();
            $table->string('og-url',200)->nullable();
            $table->string('og-type',50)->nullable();
            $table->string('og-image',255)->nullable();
            // Twitter Tags
            $table->string('twitter-title',255)->nullable();
//            $table->string('twitter-site',255)->nullable();
            $table->string('twitter-card',255)->nullable();
            $table->string('twitter-image-src',255)->nullable();
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
