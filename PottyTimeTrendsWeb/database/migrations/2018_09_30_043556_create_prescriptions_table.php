<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kiddo_id')->comment('Binding to Kiddo who needs this prescription');
            $table->integer('medication_id')->comment('Binding to medication data.');
            $table->float('interval_unit', 8, 1)->comment('How many units before this medication can be taken again, eg. Ibuprofen would have unit of "6" and type of "hours". Will overwrite interval if one set in medication settings.');
            $table->integer('interval_type')->comment('Integer matching up to a constants file of types of interval, hours, days, etc. Will overwrite interval if one set in medication settings.');
            $table->timestamp('start')->comment('When the prescription needs to start.');
            $table->timestamp('end')->comment('When the prescription needs to end.');
            $table->boolean('is_prn')->comment('Flag for if the prescription is based on symptoms and not a routine of n amount per day.');
            $table->text('notes')->comments('Any extra instructions as needed.');
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
        Schema::dropIfExists('prescriptions');
    }
}
