<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Studio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studio', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prix');
            $table->text('description');
            $table->string('city');
            $table->integer('cpostal');
            $table->string('address');
            $table->string('country')->default('france');
            $table->integer('nbr_people');
            $table->string('siren');
            $table->string('type_studio');
            $table->boolean('inge_son');
            $table->boolean('tva');
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
        Schema::dropIfExists('studio');
    }
}
