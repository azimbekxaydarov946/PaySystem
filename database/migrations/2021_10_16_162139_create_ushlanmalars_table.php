<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUshlanmalarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ushlanmalars', function (Blueprint $table) {
            $table->id();
            $table->decimal('daromadsoliq');
            $table->decimal('kasabauyushmasi');
            $table->decimal('pensiyajamgarmasi');
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
        Schema::dropIfExists('ushlanmalars');
    }
}
