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
        Schema::create('combo_items', function (Blueprint $table) {
            $table->id();
            $table->char('title');
            $table->text('descriptions');
            $table->decimal('price',5 ,2);
            $table->foreignId('users_id')->constrained();
            $table->char('comboable_type');
            $table->morphs('comboable_id');
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
        Schema::dropIfExists('combo_items');
    }
};
