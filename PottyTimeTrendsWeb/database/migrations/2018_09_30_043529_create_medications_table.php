<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment('Name of Medication.');
            $table->text('description')->comment('Detailed Description, dosage information, or specifics about what variant this is.');
            $table->integer('variant_id')->comment('If this is a variant of an existing medication, use this to link them.');
            $table->boolean('is_over_the_counter')->comment('Flag for if a prescription is needed or not for this medication.');
            $table->float('interval_unit', 8, 1)->comment('How many units before this medication can be taken again, eg. Ibuprofen would have unit of "6" and type of "hours".');
            $table->integer('interval_type')->comment('Integer matching up to a constants file of types of interval, hours, days, etc.');
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
        Schema::dropIfExists('medications');
    }
}
