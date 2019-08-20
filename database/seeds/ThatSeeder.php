<?php

use App\That;
use Illuminate\Database\Seeder;

class ThatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(That::class, 10)->create();
    }
}