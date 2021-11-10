<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('account_no')->unique();
            $table->string('account_open_date')->nullable();
            $table->string('phone_number')->unique();
            $table->string('account_types')->nullable();
            $table->string('file_jomar_date')->nullable();
            $table->string('clients_acctivation_date')->nullable();
            $table->string('check_book_bitoron')->nullable();
            $table->string('debit_card_number')->nullable()->unique();
            $table->string('debit_card_apply_date')->nullable();
            $table->string('debitcard_prodaner_date')->nullable();
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('registrations');
    }
}
