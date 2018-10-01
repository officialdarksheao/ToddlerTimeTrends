<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKiddosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kiddos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->comment('Binding to parent (user)');
            $table->string('first_name')->comment('First Name of the Kiddo. Nuf said.');
            $table->string('last_name')->comment('Last Name of the Kiddo. Nuf said.');
            $table->integer('level_id')->comment('Binding to the Level Kiddo is at.');
            $table->date('birth_date')->comment('Kiddo was born on this date. Used for calculating age in metrics.');
            $table->date('start_date')->comment('Date Kiddo started being tracked with this program. Null if setting up Kiddo to be tracked in the future.');
            $table->integer('theme_id')->comment('Identifier to be used for setting the desired theme for this Kiddo');
            $table->integer('icon_id')->comment('Identifier to specify what icon and graphic pack this Kiddo wants');
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
        Schema::dropIfExists('kiddos');
    }
}
