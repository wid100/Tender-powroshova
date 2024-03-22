<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('tender_id')->constrained()->onDelete('cascade');
            $table->string('tender_ref_id')->nullable();
            $table->string('title')->nullable();
            $table->string('palace_name')->nullable();
            $table->string('location')->nullable();
            $table->string('lease_price_number')->nullable();
            $table->string('lease_price_text')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('draft_no')->nullable();
            $table->date('pay_date')->nullable();
            $table->string('pay_amount')->nullable();


            $table->string('ejara_bank_name')->nullable();
            $table->string('ejara_draft_no')->nullable();
            $table->date('ejara_pay_date')->nullable();
            $table->string('ejara_pay_amount')->nullable();



            $table->json('refundable')->nullable();
            $table->json('schedule_price')->nullable();


            $table->string('bidder_name')->nullable();
            $table->string('bidder_number')->nullable();
            $table->string('bidder_father_name')->nullable();
            $table->string('bidder_mother_name')->nullable();



            $table->string('a_village')->nullable();
            $table->string('a_post')->nullable();
            $table->string('a_upazila')->nullable();
            $table->string('a_district')->nullable();


            $table->string('b_village')->nullable();
            $table->string('b_post')->nullable();
            $table->string('b_upazila')->nullable();
            $table->string('b_district')->nullable();


            $table->string('a_witness_father_name')->nullable();
            $table->string('a_witness_village')->nullable();
            $table->string('a_witness_post')->nullable();
            $table->string('a_witness_upazila')->nullable();
            $table->string('a_witness_district')->nullable();

            $table->string('b_witness_father_name')->nullable();
            $table->string('b_witness_village')->nullable();
            $table->string('b_witness_post')->nullable();
            $table->string('b_witness_upazila')->nullable();
            $table->string('b_witness_district')->nullable();
            $table->string('status')->default(0);

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
        Schema::dropIfExists('participates');
    }
};