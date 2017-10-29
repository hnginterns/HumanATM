<?php

use Illuminate\Database\Seeder;

class HumanAtmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\HumanAtm::class , 5)->create();
    }
}
