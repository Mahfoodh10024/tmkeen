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
        Schema::create('accept_standards', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('question1');
            $table->string('question2');
            $table->string('question3');
            $table->string('question4');
            $table->string('question5');
            $table->string('question6');
            $table->string('question7');
            $table->string('question8');
            $table->string('question9');
            $table->string('question10');
            $table->string('question11');
            $table->string('question12');
            $table->string('question13');
            $table->string('question14');
            $table->string('question15');
            $table->string('question16');
            $table->string('question17');
            $table->string('question18');
            $table->string('question19');
            $table->string('question20');
            $table->string('question21');
            $table->string('question22');
            $table->string('question23');
            $table->string('question24');
            $table->string('question25');
            $table->string('question26');
            $table->string('question27');
            $table->string('question28');
            $table->string('question29');
            $table->string('question30');
            $table->string('question31');
            $table->string('question32');
            $table->string('question33');
            $table->string('question34');
            $table->string('question35');
            $table->string('question36');
            $table->string('question37');
            $table->string('question38');
            $table->string('question39');
            $table->string('question40');
            $table->string('question41');
            $table->string('question42');
            $table->string('question43');
            $table->string('question44');
            $table->string('question45');
            $table->string('question46');
            $table->string('question47');
            $table->string('question48');
            $table->string('project_name')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accept_standards');
    }
};
