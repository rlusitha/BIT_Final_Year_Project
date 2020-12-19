<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address_no');
            $table->string('street_name');
            $table->string('city');
            $table->string('district');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('nic');
            $table->string('email');
            $table->integer('mobile_no');
            $table->timestamps();
        });

        //This will add deleted_at column to the table
        Schema::table('patients', function (Blueprint $table) {
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
        Schema::dropIfExists('patients');

        Schema::table('patients', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
