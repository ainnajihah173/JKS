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
        Schema::create('courses', function (Blueprint $table) {
            $table->id('cou_id');
            $table->foreignId('staff_ICNum');
            $table->String('cou_locDistrict');
            $table->String('cou_address');
            $table->date('cou_date');
            $table->time('cou_startTime');
            $table->time('cou_endtTime');
            $table->integer('cou_capacity');
            $table->date('cou_issuedDate');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
