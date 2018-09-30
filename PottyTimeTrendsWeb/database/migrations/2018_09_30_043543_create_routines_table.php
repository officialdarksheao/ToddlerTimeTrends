<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routines', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kiddo_id')->comment('Binding to Kiddo.');
            $table->string('name')->comment('Optional custom name of routine item, if not set routine name will be extrapolated based on the data in it.');
            $table->integer('routine_type')->comment('Integer matching up to a constants file of types of things that can be scheduled on a regular basis.');
            $table->integer('routine_id')->comment('Optional field if there is a specific item that is tracked, for instance a specific food or medication. For medication this differs from prescription reminders as this is for specific time in a Kiddos routine that medications are taken.');
            $table->integer('day')->comment('Integer representation of day of week. Match to php date("w"), 0-6 Sunday-Saturday.');
            $table->integer('time')->comment('Time as 24 hour integer, Match to php date("Hi"), hours and minutes in 24 hour format with leading zeros.');
            $table->text('notes')->comments('Any extra notes or comments on the routine, instructions or exceptions.');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('routines');
    }
}
