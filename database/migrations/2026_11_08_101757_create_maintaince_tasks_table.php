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
        Schema::create('maintaince_tasks', function (Blueprint $table) {
            $table->id('task_id');
            $table->unsignedBigInteger('complaint_id');
            $table->string('description');
            $table->string('deadline');
            $table->string('status');
            $table->string("workers_assigned")->nullable();
            $table->foreign('complaint_id')->references('complaint_id')->on('complaints');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintaince_tasks');
    }
};
