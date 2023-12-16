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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('marca')->nullable();
            $table->string('nivel',50);
            $table->string('codigo',50);
            $table->double('precio_costo');
            $table->double('precio_venta');
            $table->string('estanteria',50);
            $table->string('observaciones')->nullable()->default('N/A');
            $table->unsignedBigInteger('id_categoria');
            $table->unsignedBigInteger('id_proveedor')->nullable()->default(1);
            $table->bigInteger('stock')->nullable()->default('0');
            $table->double('porcentaje')->nullable()->default('0.00');
            $table->foreign('id_categoria')->references('id')->on('categorias');
            $table->foreign('id_proveedor')->references('id')->on('proveedores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
