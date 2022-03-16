<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_materiais', function (Blueprint $table) {
            $table->id();
            $table->string('descricao', 20);
            $table->timestamps();
        });

        Schema::table('materiais', function (Blueprint $table) {
            $table->unsignedBigInteger('tipo_id');
            $table->foreign('tipo_id')->references('id')->on('tipo_materiais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('materiais', function (Blueprint $table) {
            $table->dropForeign('materiais_tipo_id_foreign');
            $table->dropColumn('tipo_id');
        });

        Schema::dropIfExists('tipo_materiais');
    }
}
