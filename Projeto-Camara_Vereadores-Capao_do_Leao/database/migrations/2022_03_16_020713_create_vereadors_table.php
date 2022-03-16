<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVereadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vereadores', function (Blueprint $table) {
            $table->id();
            $table->string("nome", 50);
            $table->timestamps();
        });

        Schema::table('materiais', function (Blueprint $table){
            $table->unsignedBigInteger('vereador_id')->nullable();
            $table->foreign('vereador_id')->references('id')->on('vereadores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('materiais', function (Blueprint $table){
            $table->dropForeign('materiais_vereador_id_foreign');

            $table->dropColumn('vereador_id');
        });

        Schema::dropIfExists('vereadores');
    }
}
