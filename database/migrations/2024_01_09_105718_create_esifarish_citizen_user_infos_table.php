<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('esifarish_citizen_user_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->boolean('is_minor')->default(false);
            $table->boolean('is_taxpayer')->default(false);
            $table->boolean('is_esifarish')->default(false);

            $table->string('en_first_name');
            $table->string('en_middle_name')->nullable()->default(null);
            $table->string('en_last_name');


            $table->string('np_first_name');
            $table->string('np_middle_name')->nullable()->default(null);
            $table->string('np_last_name');

            $table->string('user_name');

            $table->string('dob_registration_no')->nullable()->default(null);

            $table->foreign('user_id')->references('id')->on('esifarish_citizen_users');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('esifarish_citizen_user_infos');
    }
};
