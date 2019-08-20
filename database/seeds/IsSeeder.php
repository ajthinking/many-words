<?php

use App\Is;
use Illuminate\Database\Seeder;

class IsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Is::class, 10)->create();
    }
}