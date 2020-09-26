<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainClusterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_cluster', function (Blueprint $table) {
            $table->id();
            $table->string('cluster_ID', 100);
            $table->tinyInteger('size');
            $table->tinyInteger('phase');
            $table->string('pfamMotif', 200);
            $table->string('exonBlocks', 200);
            $table->tinyInteger('microExonOrder');
            $table->text('ME_logo_files');
            $table->text('NT60_seq_files');
            $table->text('NT60_consensusString_files');
            $table->text('NT60_consensusMatrix_files');
            $table->text('NT60_logo_files');
            $table->text('AA20_consensusString_files');
            $table->text('AA20_consensusMatrix_files');
            $table->text('AA20_logo_files');
            $table->text('msa_files_limit50_phaseOn');
            $table->text('msa_files_limit500_phaseOn');
            $table->text('msa_files_limitNA_phaseOn');
            $table->text('msa_files_limit50_phaseOff');
            $table->text('msa_files_limit500_phaseOff');
            $table->text('msa_files_limitNA_phaseOff');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('main_cluster');
    }
}
