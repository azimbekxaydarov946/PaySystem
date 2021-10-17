<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXodimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xodims', function (Blueprint $table) {
            $table->id();
            $table->string('ism');
            $table->string('familiya')->nullable();
            $table->string('sharif')->nullable();
            $table->string('manzil')->nullable();
            $table->string('telefonRaqam');
            $table->string('email')->nullable();
            $table->integer('bankschot')->nullable();
            $table->string('parol')->nullable();
            $table->boolean('status');
            $table->integer('shahar_id');
            $table->integer('malumot_id')->nullable();
            $table->integer('lavozim_id')->nullable();
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
        Schema::dropIfExists('xodims');
    }
}
