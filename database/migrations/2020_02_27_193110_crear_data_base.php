<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearDataBase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representantes', function (Blueprint $table) {
            $table->bigIncrements('idRepresentante');
            $table->string('firstName');
            $table->string('secondName');
            $table->string('lastName');
            $table->string('secondLastName');
            $table->string('email')->unique();
            $table->integer('phoneNumber');
            $table->boolean('active')->default(1);
            $table->timestamps();
        });

        Schema::create('atletas', function (Blueprint $table) {
            $table->bigInteger('CI')->unique();
            $table->bigIncrements('CIDirectivos');
            $table->string('passport')->unique();
            $table->string('firstName');
            $table->string('secondName');
            $table->string('lastName');
            $table->string('secondLastName');
            $table->string('email')->unique();
            $table->integer('phoneNumber');
            $table->string('nickname');
            $table->string('country');
            $table->integer('cellphone');
            $table->date('birthDate');
            $table->string('birthPlace');
            $table->string('city');
            $table->string('bloodType');
            $table->string('height');
            $table->string('weight');
            $table->enum('foot',['izq','der']);
            $table->string('position');
            $table->string('previousClub');
            $table->string('highSchool');
            $table->string('footSize');
            $table->string('shirtSize');
            $table->string('pantSize');
            $table->string('allergy');
            $table->string('injuries');
            $table->string('description');
            $table->boolean('active')->default(1);
            $table->timestamps();
        });

        Schema::create('directivos', function (Blueprint $table) {
            $table->bigInteger('CI')->unique();
            $table->string('firstName');
            $table->string('secondName');
            $table->string('lastName');
            $table->string('secondLastName');
            $table->string('email')->unique();
            $table->integer('phoneNumber');
            $table->string('role');
            $table->boolean('active')->default(1);
            $table->timestamps();
        });

        Schema::create('pagos', function (Blueprint $table) {
            $table->bigIncrements('idPago');
            $table->integer('idFactura');
            $table->integer('idProducto');
            $table->boolean('active')->default(1);
            $table->timestamps();
        });

        Schema::create('facturas', function (Blueprint $table) {
            $table->bigIncrements('idFactura');
            $table->integer('totalPrice');
            $table->integer('discount');
            $table->boolean('active')->default(1);
            $table->timestamps();
        });

        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('idProducto');
            $table->integer('idPlan');
            $table->integer('idUniforme');
            $table->enum('productType',['plan','uniforme']);
            $table->boolean('active')->default(1);
            $table->timestamps();
        });

        Schema::create('planes', function (Blueprint $table) {
            $table->bigIncrements('idPlan');
            $table->string('planName');
            $table->json('planDays');
            $table->integer('planPrice');
            $table->boolean('active')->default(1);
            $table->timestamps();
        });

        Schema::create('uniformes', function (Blueprint $table) {
            $table->bigIncrements('idUniforme');
            $table->string('name');
            $table->integer('price');
            $table->boolean('active')->default(1);
            $table->timestamps();
        });

        Schema::create('asistencias', function (Blueprint $table) {
            $table->bigIncrements('idAsistencia');
            $table->integer('idCita');
            $table->integer('CIDirectivo');
            $table->boolean('active')->default(1);
            $table->timestamps();
        });

        Schema::create('citas', function (Blueprint $table) {
            $table->bigIncrements('idCita');
            $table->time('startTime');
            $table->time('endTime');
            $table->date('day');
            $table->string('ubicacion');
            $table->enum('name',['entrenamiento','reunion']);
            $table->boolean('active')->default(1);
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
        Schema::dropIfExists('representantes');
        Schema::dropIfExists('atletas');
        Schema::dropIfExists('directivos');
        Schema::dropIfExists('pagos');
        Schema::dropIfExists('facturas');
        Schema::dropIfExists('productos');
        Schema::dropIfExists('planes');
        Schema::dropIfExists('uniformes');
        Schema::dropIfExists('asistencias');
        Schema::dropIfExists('citas');
    }
}
