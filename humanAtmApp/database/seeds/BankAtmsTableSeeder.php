<?php

use Illuminate\Database\Seeder;

class BankAtmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\BankAtm::class , 5)->create();
    }
}
