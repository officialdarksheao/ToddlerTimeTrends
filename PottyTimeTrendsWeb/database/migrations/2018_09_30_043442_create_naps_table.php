<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('naps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kiddo_id')->comment('Binding to Kiddo.');
            $table->timestamp('start')->comment('When the nap started.');
            $table->timestamp('end')->comment('When the nap ended.');
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
        Schema::dropIfExists('naps');
    }
}
