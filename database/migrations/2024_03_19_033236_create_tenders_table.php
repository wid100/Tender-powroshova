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
        Schema::create('tenders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tender_id')->uniqid();
            $table->string('user_id');
            $table->text('description')->nullable();
            $table->text('contact_details')->nullable();
            $table->string('start_date');
            $table->string('end_date');
            $table->string('govment_price')->nullable();
            $table->string('shedeul_price')->nullable();
            $table->string('method')->nullable();
            $table->text('condition')->nullable();
            $table->boolean('status')->default(false);
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
        Schema::dropIfExists('tenders');
    }
};
