<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('cliente', function(Blueprint $table){
                $table->increments('Id');
                $table->string('nome',50)->nullable();
                $table->string('email',50)->nullable();
                $table->string('cpf',15)->nullable();
                $table->string('celular',15)->nullable();
            });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
