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
        Schema::create('project_douments', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary Key
            $table->string('document_name');
            $table->string('document_type');
            // $table->foreignId('project_id')->constrained('users_projects');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_douments');
    }
};
