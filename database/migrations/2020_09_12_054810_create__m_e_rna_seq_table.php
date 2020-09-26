<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMERnaSeqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_m_e_rna_seq', function (Blueprint $table) {
            $table->id();
            $table->string('microExonID', 100)->nullable();
            $table->string('clusterID', 100)->nullable();
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
            $table->string('transcript_id', 200)->nullable();
            $table->string('gene_id', 200)->nullable();
            $table->string('Pfam_motif', 200)->nullable();
            $table->string('motif_evalue', 200)->nullable();
            $table->string('motif_start', 200)->nullable();
            $table->string('motif_end', 200)->nullable();
            $table->string('ref_gene_id', 200)->nullable();
            $table->string('ref_gene_name', 200)->nullable();
            $table->string('protein_files', 200)->nullable();
            $table->string('cds_files', 200)->nullable();
            $table->string('annotated', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_m_e_rna_seq');
    }
}
