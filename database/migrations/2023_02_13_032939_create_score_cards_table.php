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
        Schema::create('score_cards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained();
            $table->foreignId('courses_id')->constrained();
            $table->date('date');
            $table->integer('wrong_answer');
            $table->integer('correct_answer');
            $table->integer('flashcard_complete');
            $table->integer('quizzes_complete');
            $table->integer('practices_complete');
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
        Schema::dropIfExists('score_cards');
    }
};
