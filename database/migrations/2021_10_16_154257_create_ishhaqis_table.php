<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIshhaqisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ishhaqis', function (Blueprint $table) {
            $table->id();
            $table->decimal('ishhaqi');
            $table->decimal('mukofat');
            $table->decimal('kunlik');
            $table->decimal('soatlik');
            $table->decimal('sofishhaqi');
            $table->year('yil');
            $table->integer('ushlanma_id');
            $table->integer('oy_id');
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
        Schema::dropIfExists('ishhaqis');
    }
}
