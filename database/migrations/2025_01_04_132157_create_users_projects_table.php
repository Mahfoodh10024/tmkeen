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
        Schema::create('users_projects', function (Blueprint $table) {
        $table->id();
        $table->string('name')->unique();
        $table->string('type');
        $table->string('budget');
        $table->string('paid');
        $table->string('description');
        $table->string('project_status');
        $table->string('project_period');
        $table->string('tools');
        $table->string('executer');
        $table->foreignId('user_id')->constrained('users_accounts')->onDelete('cascade');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_projects');
    }
};
