<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWithdrawalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdrawals', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('withdrawer_id');
            $table->unsignedInteger('payer_id');

            $table->string('phone_number');
            $table->integer('amount');
            $table->string('bank_name');
            $table->bigInteger('account_number');
            $table->string('location');

            $table->string('status')->default('pending');
            $table->timestamps();

            $table->foreign('withdrawer_id')->references('id')->on('users')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('withdrawals');
    }
}
