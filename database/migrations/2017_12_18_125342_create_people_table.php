<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            //故人のデータ
            $table->string('firstName');
            $table->string('secondName');
            $table->integer('age');
            $table->dateTime('deadDate');
            
            //施主のデータ
            $table->string('ownerFirstName');
            $table->string('ownerSecondName');
            $table->string('ownerAddress');
            $table->string('ownerTel');
            $table->dateTime('ceremonyDate');
            
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
        Schema::dropIfExists('people');
    }
}
