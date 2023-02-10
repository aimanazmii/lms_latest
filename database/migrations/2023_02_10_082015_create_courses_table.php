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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->char('tahap');
            $table->decimal('price',5 ,2);
            $table->decimal('price_compare_at',5 ,2);
            $table->text('description');
            $table->text('short_description');
            $table->integer('total_video');
            $table->biginteger('total_video_duration');
            $table->integer('total_flashcards');
            $table->integer('total_practice');
            $table->integer('total_quizzes');
            $table->dateTime('last_update_at');
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
        Schema::dropIfExists('courses');
    }
};
