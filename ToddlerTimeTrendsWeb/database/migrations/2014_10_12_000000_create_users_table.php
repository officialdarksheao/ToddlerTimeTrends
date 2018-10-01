<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->string('first_name')->comment('First Name of the Parent. Nuf said.');
            $table->string('last_name')->comment('Last Name of the Parent. Nuf said.');
            $table->integer('theme_id')->comment('Identifier to be used for setting the desired theme for this user');
            $table->integer('icon_id')->comment('Identifier to specify what icon and graphic pack this user wants');
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
        Schema::dropIfExists('users');
    }
}
