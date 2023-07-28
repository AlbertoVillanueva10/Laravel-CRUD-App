<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


//Clase que extiende de migration
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Aqui crea una tabla client 
        Schema::create('clients', function (Blueprint $table) {
            //Atributos de esa tabla, todas las migraciones tienen un ID y un timestamp = marca de tiempo, create app and update app
            $table->id(); //valor autoincrementable
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
        Schema::dropIfExists('clients');
    }
};
