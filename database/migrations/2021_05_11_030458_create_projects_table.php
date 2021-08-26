<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('url_slug');
            $table->string('main_picture');
            $table->string('logo_picture');
            $table->string('mini_picture');
            $table->text('description');
            $table->decimal('start_price', 10, 2);
            $table->integer('meters');
            $table->smallInteger('build_time_months');
            $table->integer('build_area');
            $table->decimal('build_price', 10, 2);
            $table->smallInteger('quantity');
            $table->string('address');
            $table->string('build_type')->default('DPTOS');
            $table->string('location');
            $table->mediumText('aparments_detail');
            $table->string('rooms');
            $table->string('baths');
            $table->string('typologies');
            $table->enum('build_status', ['PREVENTA', 'CONSTRUCCION', 'ENTREGADO'])->default('PREVENTA');
            $table->string('brochure')->nullable();
            $table->string('google_map');
            $table->string('financing')->nullable();
            $table->date('build_start');
            $table->date('build_finish');
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
