<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->increments('Healthnum');
            $table->string('Hospnum');
            $table->string('lname');
            $table->string('fname');
            $table->string('mname');
            $table->date('birthdate');
            $table->string('age');
            $table->string('sex');
            $table->string('address');
            $table->string('cs');
            $table->string('religion');
            $table->string('createdBy');
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
        Schema::drop('admissions');
    }
}
