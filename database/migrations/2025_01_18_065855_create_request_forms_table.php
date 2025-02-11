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
        Schema::create('request_forms', function (Blueprint $table) {

            $table->id()->autoIncrement();
            $table->string('name');
            $table->string('user_id_card')->unique();

            // $table->string('gender');
            $table->string('age');

            $table->string('state');
            $table->string('city');
            $table->string('neighborhood');

            $table->string('email');
            $table->string('phone');

            $table->string('education');
            $table->string('education_place');
            $table->string('Specialty');

            $table->string('work');
            // $table->string('job');

            $table->string('project_name');
            $table->string('current_model');
            $table->string('workable');

            $table->string('project_summary');
            $table->string('obstacles');
            $table->string('project_description');
            $table->string('project_distinction');
            $table->string('evaluation_things');

            $table->string('is_innovation');
            $table->string('project_support');
            $table->string('policies');
            $table->foreignId('user_id')->constrained('users' ,'id');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_forms');
    }
};
