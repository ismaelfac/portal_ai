<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponentTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('component_templates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('template_id')->references('id')->on('templates')->onUpdate('cascade');
            $table->foreignId('component_id')->references('id')->on('components');
            $table->string('title_component')->unique();
            $table->json('parameters');
            $table->mediumText('content');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('component_templates');
    }
}
