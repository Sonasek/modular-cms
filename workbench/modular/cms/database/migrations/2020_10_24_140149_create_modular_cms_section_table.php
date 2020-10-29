<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModularCmsSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modular_cms_section', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id');
            $table->string('name', 255);
            $table->string('title', 255)->nullable();
            $table->string('subtitle', 255)->nullable();
            $table->integer('type');
            $table->text('data');
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
        Schema::dropIfExists('modular_cms_section');
    }
}
