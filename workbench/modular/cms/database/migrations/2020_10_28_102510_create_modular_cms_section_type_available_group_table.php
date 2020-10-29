<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModularCmsSectionTypeAvailableGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modular_cms_section_type_available_group', function (Blueprint $table) {
            $table->id();
            $table->integer('section_type_id');
            $table->string('panel_type_group');
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
        Schema::dropIfExists('modular_cms_section_type_available_group');
    }
}
