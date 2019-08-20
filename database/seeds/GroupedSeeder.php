<?php

use App\Grouped;
use Illuminate\Database\Seeder;

class GroupedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Grouped::class, 10)->create();
    }
}