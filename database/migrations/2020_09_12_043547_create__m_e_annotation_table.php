<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMEAnnotationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_m_e_annotation', function (Blueprint $table) {
            $table->id();
            $table->string('microExonID', 100)->nullable();
            $table->string('source', 100)->nullable();
            $table->string('species', 100)->nullable();
            $table->string('chr', 100)->nullable();
            $table->integer('start')->nullable();
            $table->integer('end')->nullable();
            $table->string('strand', 100)->nullable();
            $table->integer('size')->nullable();
            $table->integer('phase')->nullable();
            $table->string('me_nt', 100)->nullable();
            $table->string('me_aa', 100)->nullable();
            $table->text('nt60')->nullable();
            $table->string('aa20', 100)->nullable();
            $table->string('blocks', 200)->nullable();
            $table->integer('me_order')->nullable();
            $table->string('transcript_id', 100)->nullable();
            $table->string('protein_id', 100)->nullable();
            $table->string('gene_id', 100)->nullable();
            $table->string('gene_name', 200)->nullable();
            $table->string('Pfam_motif', 200)->nullable();
            $table->string('motif_evalue', 200)->nullable();
            $table->string('motif_start', 200)->nullable();
            $table->string('motif_end', 200)->nullable();
            $table->text('protein_files')->nullable();
            $table->text('cds_files')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_m_e_annotation');
    }
}
