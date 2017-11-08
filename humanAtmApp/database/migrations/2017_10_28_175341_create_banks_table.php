<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banks', function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('name');
            $table->string('code')->nullable();
            $table->timestamps();
        });

        $banks = ["Access Bank Nigeria", 
        "Citibank Nigeria",
        "Diamond Bank",
        "Ecobank Nigeria",
        "Fidelity Bank Nigeria",
        "First Bank of Nigeria",
        "First City Monument Bank",
        "Guaranty Trust Bank",
        "Heritage Bank plc",
        "Keystone Bank Limited", 
        "Providus Bank plc",
        "Skye Bank",
        "Stanbic IBTC Bank Nigeria Limited",
        "Standard Chartered Bank",
        "Sterling Bank",
        "Suntrust Bank Nigeria Limited",
        "Union Bank of Nigeria",
        "United Bank for Africa",
        "Unity Bank plc",
        "Wema Bank",
        "Zenith Bank"];

        for ($b = 0; $b< count($banks); $b++)
        {
            DB::table('banks')->insert([
               
               'name' => $banks[$b],
           ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banks');
    }
}
