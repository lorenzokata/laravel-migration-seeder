<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacationPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacation_packages', function (Blueprint $table) {
            $table->id();
            $table->string('travel_agency', 80);
            $table->tinyInteger('travelers')->unsigned();
            $table->tinyInteger('days')->unsigned();
            $table->string('location', 100);
            $table->string('transportation', 30);
            $table->string('property', 30);
            $table->string('departing', 10);
            $table->text('details')->nullable();
            $table->float('discount', 5, 2)->nullable();
            $table->float('price', 6, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacation_packages');
    }
}
