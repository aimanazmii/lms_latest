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
        Schema::create('user_video_progress', function (Blueprint $table) {
            $table->id();
            $table->char('title');
            $table->char('subtitle');
            $table->integer('duration');
            $table->biginteger('current_minutes');
            $table->boolean('coming_soon');
            $table->dateTime('completed_at');
            $table->char('video_url');
            $table->foreignId('video_topic_progresses')->constrained();
            $table->foreignId('videos_id')->constrained();
            $table->foreignId('users_id')->constrained();
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
        Schema::dropIfExists('user_video_progress');
    }
};
