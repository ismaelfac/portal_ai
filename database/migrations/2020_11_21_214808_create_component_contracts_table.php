<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponentContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('component_contracts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('component_id')->references('id')->on('components')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('contract_id')->references('id')->on('contracts')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->boolean('isActive')->default(false);
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
        Schema::dropIfExists('component_contracts');
    }
}
