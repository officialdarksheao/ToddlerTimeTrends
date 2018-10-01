<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kiddo_id')->comment('Binding to Kiddo that went.');
            $table->integer('go_type')->comment('Integer matching up to a constants file of types of "go".');
            $table->boolean('is_accident')->comment('Flag for specifying this go was an accident.');
            $table->boolean('is_scheduled')->comment('Flag for specifying this go was planned.');
            $table->timestamp('timestamp')->nullable()->comment('When the go was.');
            $table->text('notes')->comments('Any extra notes or comments on the go, situations or events.');
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
        Schema::dropIfExists('gos');
    }
}
