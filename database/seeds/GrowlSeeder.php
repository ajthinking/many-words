<?php

use App\Growl;
use Illuminate\Database\Seeder;

class GrowlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Growl::class, 10)->create();
    }
}