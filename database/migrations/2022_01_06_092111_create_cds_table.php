<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     // different columns were added for cd table
    public function up()
    {
        Schema::create('cds', function (Blueprint $table) {
            $table->id();
            $table-> string('Artist');
            $table-> string('Title')->unique();
            $table-> integer('Duration');
            $table-> integer('price');
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
        Schema::dropIfExists('cds');
    }
}
