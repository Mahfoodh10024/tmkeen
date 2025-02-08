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
        Schema::create('backings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('backer_name');
            $table->bigInteger('backer_id');
            $table->foreignId('projects_id')->constrained('projects' ,'id')->cascadeOnDelete();
            $table->string('backing_type');
            $table->bigInteger('backing_amount');
            $table->string('backing_description');
            $table->string('project_owner');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('backings');
    }
};
