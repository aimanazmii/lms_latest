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
        Schema::create('purchased_courses', function (Blueprint $table) {
            $table->id();
            $table->decimal('course_price', 5,2);
            $table->decimal('discount', 5, 2);
            $table->char('discount_code_used');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->foreignId('users_id')->constrained();
            $table->foreignId('courses_id')->contraiend();
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
        Schema::dropIfExists('purchased_courses');
    }
};
