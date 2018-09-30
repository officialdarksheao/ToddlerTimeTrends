<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserOverwritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_overwrites', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->comment('Overwrite a setting for the whole account of this user.');
            $table->integer('item_type')->comment('Integer matching up to a constants file of all settings that can be overwritten.');
            $table->string('value')->comment('The new value this setting should have.');
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
        Schema::dropIfExists('user_overwrites');
    }
}
