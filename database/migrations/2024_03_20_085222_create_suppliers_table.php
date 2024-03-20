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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('supplier_type')->nullable();
            $table->string('supplier_business')->nullable();
            $table->string('item_category')->nullable();
            $table->string('trade_license')->nullable();
            $table->string('trade_license_expared')->nullable();
            $table->string('trade_license_renewed')->nullable();
            $table->string('update_vat')->nullable();
            $table->string('tax_identity')->nullable();
            $table->string('tax_circle')->nullable();
            $table->string('cradit_rating')->nullable();
            $table->text('comment')->nullable();

            $table->json('bin_info')->nullable();
            $table->json('contact')->nullable();
            $table->json('company_info')->nullable();
            $table->json('bank_info')->nullable();
            $table->json('document_a')->nullable();
            $table->json('document_b')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('suppliers');
    }
};
