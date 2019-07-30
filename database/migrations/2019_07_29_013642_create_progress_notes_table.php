<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgressNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progress_notes', function (Blueprint $table) {
            $table->increments('TransNo');
            $table->string('Healthnum');
            $table->string('Idnum')->nullable();
            $table->string('Subjective')->nullable();;
            $table->string('Objectives')->nullable();;
            $table->string('Assessment')->nullable();;
            $table->text('Plans')->nullable();
            $table->string('Orders')->nullable();;
            $table->string('PxOutcome')->nullable();;
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
        Schema::drop('progress_notes');
    }
}
