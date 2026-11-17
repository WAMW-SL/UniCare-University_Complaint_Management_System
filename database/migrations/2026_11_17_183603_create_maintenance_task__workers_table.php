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
        Schema::create('maintenance_task__workers', function (Blueprint $table) {
            $table->id();
            $table->string('Task_ID');
            $table->foreign('Task_ID')
                  ->references('Task_ID')
                  ->on('maintenance_tasks');
            $table->string('Worker_ID');
            $table->foreign('Worker_ID')
                  ->references('User_ID')
                  ->on('users');
            $table->unique(['Task_ID', 'Worker_ID']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maintenance_task__workers');
    }
};
