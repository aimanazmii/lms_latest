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
        Schema::create('user_quizzes_answers', function (Blueprint $table) {
            $table->id();
            $table->integer('position');
            $table->char('question_type');
            $table->text('question');
            $table->char('answer_1_type');
            $table->text('answer_1');
            $table->char('answer_2_type');
            $table->text('answer_2');
            $table->integer('answer_3_type');
            $table->integer('answer_3');
            $table->char('answer_4_type');
            $table->integer('answer_4');
            $table->integer('answer');
            $table->integer('correct_answer');
            $table->foreignId('user_quizzes_id')->constrained();
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
        Schema::dropIfExists('user_quizzes_answers');
    }
};
