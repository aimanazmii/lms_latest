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
        Schema::create('user_practices', function (Blueprint $table) {
            $table->id();
            $table->integer('correct_answer');
            $table->integer('wrong_answer');
            $table->dateTime('completed_at');
            $table->foreignId('practice_sets_id')->constrained();
            $table->biginteger('users_id');
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
        Schema::dropIfExists('user_practices');
    }
};
