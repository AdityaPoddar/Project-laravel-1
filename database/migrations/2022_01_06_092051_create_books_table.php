<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // different columns were added for book table
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table-> string('Author');
            $table-> string('Title')->unique();
            $table-> integer('Pages');
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
        Schema::dropIfExists('books');
    }
}
