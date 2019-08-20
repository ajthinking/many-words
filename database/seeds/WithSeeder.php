<?php

use App\With;
use Illuminate\Database\Seeder;

class WithSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(With::class, 10)->create();
    }
}