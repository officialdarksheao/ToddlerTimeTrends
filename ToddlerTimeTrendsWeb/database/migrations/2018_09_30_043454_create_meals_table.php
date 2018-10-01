<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kiddo_id')->comment('Binding to Kiddo.');
            $table->integer('nom_type')->comment('Integer matching up to a constants file of types of nourishment, Food or Water.');
            $table->integer('nom_id')->comment('Binding to table matching type specified in nom_type.');
            $table->timestamp('timestamp')->nullable()->comment('Time of attempted ingestion, anything eaten in the same meal should have matching timestamps.');
            $table->text('notes')->comments('Any extra notes or comments on the nap, situations or events.');
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
        Schema::dropIfExists('meals');
    }
}
