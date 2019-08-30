<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->unsignedInteger('tipo_id');
            $table->foreign('tipo_id')->references('id')->on('tipos');
            $table->string('data', 10);
            $table->decimal('valor');
            $table->tinyInteger('credito');
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
        Schema::dropIfExists('trans');
    }
}
