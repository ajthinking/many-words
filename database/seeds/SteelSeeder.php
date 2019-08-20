<?php

use App\Steel;
use Illuminate\Database\Seeder;

class SteelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Steel::class, 10)->create();
    }
}