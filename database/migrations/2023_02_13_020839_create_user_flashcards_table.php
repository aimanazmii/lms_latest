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
        Schema::create('user_flashcards', function (Blueprint $table) {
            $table->id();
            $table->integer('correct_answer');
            $table->integer('wrong_answer');
            $table->integer('rememebered');
            $table->integer('not_remembered');
            $table->foreignId('flashcard_sets_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->dateTime('completed_at');
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
        Schema::dropIfExists('user_flashcards');
    }
};
