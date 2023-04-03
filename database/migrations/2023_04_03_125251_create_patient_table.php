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
        Schema::create('patient', function (Blueprint $patient) {
            $patient->id();
            $patient->string("last_name");
            $patient->string("first_name");
            $patient->string("middle_name_initials");
            $patient->date("date_of_birth");
            $patient->string("sex");
            $patient->string("age");
            $patient->string("race");
            $patient->string("HorL");
            $patient->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient');
    }
};
