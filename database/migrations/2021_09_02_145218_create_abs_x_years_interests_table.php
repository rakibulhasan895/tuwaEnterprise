<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsXYearsInterestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abs_x_years_interests', function (Blueprint $table) {
            $table->id();
            $table->string('year')->nullable();
            $table->string('original_balance')->nullable();;
            $table->string('interest_balance')->nullable();;
            $table->string('total_balance')->nullable();;
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
        Schema::dropIfExists('abs_x_years_interests');
    }
}
