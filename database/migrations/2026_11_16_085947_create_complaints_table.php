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
        Schema::create('complaints', function (Blueprint $table) {
            $table->id();
            $table->string('Complaint_ID')->nullable()->unique();
            $table->string('User_ID')->nullable();
            $table->foreign('User_ID')
                  ->references('User_ID')
                  ->on('users');
            $table->text('Description');
            $table->string('Category');
            $table->date('Submitted_Date');
            $table->time('Submitted_Time');
            $table->string('Status');
            $table->string('Assigned_Department')->nullable();
            $table->foreign('Assigned_Department')
                  ->references('Department_ID')
                  ->on('departments');
            $table->string('Task')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complaints');
    }
};
