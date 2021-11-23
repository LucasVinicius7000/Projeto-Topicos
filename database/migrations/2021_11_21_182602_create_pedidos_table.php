<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nome");
            $table->string("email");
            $table->string("celular");
            $table->string("cpf");
            $table->string("mensagem");
            $table->unsignedBigInteger('idUser')->nullable();
            $table->integer('qtWheyBlue')->nullable();
            $table->integer('qtCreatine')->nullable();
            $table->integer('qtWheyPink')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
