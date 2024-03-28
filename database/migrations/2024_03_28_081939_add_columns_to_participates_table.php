<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToParticipatesTable extends Migration
{
    public function up()
    {
        Schema::table('participates', function (Blueprint $table) {
            $table->string('biyna_upload_file')->nullable();
            $table->string('ejara_upload_file')->nullable();
            $table->string('refundable_document_file')->nullable();
            $table->string('schedule_price_document_file')->nullable();
            $table->string('a_witness_name')->nullable();
            $table->string('b_witness_name')->nullable();
        });
    }

    public function down()
    {
        Schema::table('participates', function (Blueprint $table) {
            $table->dropColumn('biyna_upload_file');
            $table->dropColumn('ejara_upload_file');
            $table->dropColumn('refundable_document_file');
            $table->dropColumn('schedule_price_document_file');
            $table->dropColumn('a_witness_name');
            $table->dropColumn('b_witness_name');
        });
    }
}
