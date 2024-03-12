<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('attendance_models', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->datetime('datetime');
            $table->string('type'); // arrival, departure
            $table->string('cause'); // work, 
            $table->boolean('paid')->nullable();
            /* SoftDeletes trait */
            $table->integer('created_by')->default(0);
            $table->integer('updated_by')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->SoftDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendance_models');
    }
};
