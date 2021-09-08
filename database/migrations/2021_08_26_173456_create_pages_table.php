<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('page');
            $table->string('title');
            $table->string('title_2');
            $table->mediumText('main_text');
            $table->mediumText('alter_text');
            $table->string('banner');
            $table->string('picture');
            $table->mediumText('vision');
            $table->mediumText('mision');
            $table->mediumText('other_text');
            $table->mediumText('small_text');
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
        Schema::dropIfExists('pages');
    }
}
