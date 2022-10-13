<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collections', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('color');
            $table->integer('price');
            $table->integer('cat_id');
            $table->integer('size_id');
            $table->integer('dial_id');
            $table->integer('type_id');
            $table->string('year');
            $table->text('image_thumbnail');
            $table->text('image_1');
            $table->text('image_2');
            $table->text('image_3');
            $table->boolean('deleted');
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
        Schema::dropIfExists('collections');
    }
}
