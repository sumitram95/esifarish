<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('esifarish_citizen_tax_payers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('taxpayer_no')->nullable();
            $table->string('internal_taxpayer_no')->nullable();
            $table->string('citizen_no');
            $table->string('en_citizenship_issued_date');
            $table->string('np_citizenship_issued_date');
            $table->string('citizenship_issued_district_id');

            $table->foreign('user_id')->references('id')->on('esifarish_citizen_users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('esifarish_citizen_tax_payers');
    }
};
