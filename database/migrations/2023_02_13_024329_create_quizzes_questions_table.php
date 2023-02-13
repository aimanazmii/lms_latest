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
        Schema::create('quizzes_questions', function (Blueprint $table) {
            $table->id();
            $table->char('question_type');
            $table->text('question');
            $table->foreignId('quiz_sets_id')->constrained();
            $table->char('answer_1_type');
            $table->text('answer_1');
            $table->char('answer_2_type');
            $table->text('answer_2');
            $table->char('answer_3_type');
            $table->text('answer_3');
            $table->char('answer_4_type');
            $table->text('answer_4');
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
        Schema::dropIfExists('quizzes_questions');
    }
};
