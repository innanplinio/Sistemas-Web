<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHerousersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('herousers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('hero_id');
            $table->foreign('hero_id')->references('id')->on('herois');//->onDelete('cascade');   $table->unsignedInteger('user_id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');//->onDelete('cascade');

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
        Schema::dropIfExists('herousers');
    }
}
