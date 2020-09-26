<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMEListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_m_e_list', function (Blueprint $table) {
            $table->id();
            $table->string('microExonID', 100)->nullable();
            $table->string('clusterID', 100)->nullable();
            $table->string('species', 100)->nullable();
            $table->string('chr', 100)->nullable();
            $table->integer('start')->nullable();
            $table->integer('end')->nullable();
            $table->string('strand', 100)->nullable();
            $table->integer('size')->nullable();
            $table->boolean('RNA_seq')->nullable();
            $table->boolean('prediction')->nullable();
            $table->boolean('annotation')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_m_e_list');
    }
}
