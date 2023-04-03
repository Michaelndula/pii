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
        Schema::create('facility', function (Blueprint $facility) {
            $facility->id();
            $facility->string("f_name");
            $facility->string("facility_city");
            $facility->string("facility_county");
            $facility->string("facility_state");
            $facility->string("facility_phone");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facility');
    }
};
