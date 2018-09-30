<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKiddoOverwritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kiddo_overwrites', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kiddo_id')->comment('Overwrite a setting for only this Kiddo.');
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
        Schema::dropIfExists('kiddo_overwrites');
    }
}
