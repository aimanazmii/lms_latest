<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flashcard_questions', function (Blueprint $table) {
            $table->id();
            $table->char('question_type');
            $table->text('question');
            $table->foreignId('flashcard_sets_id')->constrained();
            $table->char('answer_1_type');
            $table->text('answer_1');
            $table->char('answer_2_type');
            $table->text('answer_2');
            $table->integer('correct_answer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flashcard_questions');
    }
};
