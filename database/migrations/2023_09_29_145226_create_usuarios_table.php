<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     public function up()
     {
         Schema::create('usuarios', function (Blueprint $table) {
             $table->id();
             $table->string('nombre');
             $table->string('nombre_completo');
             $table->timestamps();
             $table->softDeletes(); 
         });
     }
     
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
